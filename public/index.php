<?php
use Respect\Validation\Validator as v;

if (PHP_SAPI == 'cli-server') {
    // To help the built-in PHP dev server, check if the request was actually for
    // something which should probably be served as a static file
    $url  = parse_url($_SERVER['REQUEST_URI']);
    $file = __DIR__ . $url['path'];
    if (is_file($file)) {
        return false;
    }
}

require __DIR__ . '/../vendor/autoload.php';

session_start();

// Instantiate the app
$settings = require __DIR__ . '/../src/settings.php';
$app = new \Slim\App($settings);

	
$app->options('/{routes:.+}', function ($request, $response, $args) {
    return $response;
});

$app->add(function ($req, $res, $next) {
    $response = $next($req, $res);
    return $response
            ->withHeader('Access-Control-Allow-Origin', '*')
            ->withHeader('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, Accept, Origin, Authorization')
            ->withHeader('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, PATCH, OPTIONS');
});

require __DIR__ . '/../src/validators.php';


$app->add(new \DavidePastore\Slim\Validation\Validation($validators));

// Set up dependencies
require __DIR__ . '/../src/dependencies.php';

// Register middleware
require __DIR__ . '/../src/middleware.php';

// Register routes
require __DIR__ . '/../src/routes.php';

// routing
$app->group('/api/orders', function () {
    $this->get('', 'OrdersController:index');
    $this->get('/unpaid', 'OrdersController:unpaid');
    $this->get('/{id:[0-9]+}', 'OrdersController:details');
});

// routing
$app->group('/api/auth', function () {
    $this->get('/me', 'AuthController:user');
    $this->post('/token', 'AuthController:token');
    $this->get('/email', 'AuthController:sendemail');
});

$app->group('/api/password', function () {
    $this->post('/create', 'PasswordController:create');
    $this->post('/reset', 'PasswordController:reset');
    $this->post('/reset-password', 'PasswordController:resetpassword');
    $this->post('/resetsuccess', 'PasswordController:resetsuccess');
    $this->get('/sendresetpasswordemail', 'PasswordController:sendresetpasswordemail');
});

$app->group('/api/submit', function () {
    $this->post('/signup', 'SubmitOrderController:signup');
    $this->post('/login', 'SubmitOrderController:login');
    $this->post('/neworder', 'SubmitOrderController:neworder');
    $this->post('/payfororder', 'SubmitOrderController:payfororder');

    //Create user webhook
    $this->post('/clientaccountcreated', 'SubmitOrderController:clientaccountcreated');
    $this->post('/clientordercreated', 'SubmitOrderController:clientordercreated');
});

$app->group('/api/payments', function () {
    $this->get('/cancelled', 'PaymentsController:cancelled');
    $this->get('/success', 'PaymentsController:success');
    $this->post('/paysuccess', 'PaymentsController:paysuccess');
});

$app->group('/api/writers', function () {
    $this->get('', 'WritersController:index');
});

$app->group('/api/discounts', function () {
    $this->get('', 'DiscountsController:index');
});

// Catch-all route to serve a 404 Not Found page if none of the routes match
// NOTE: make sure this route is defined last
$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function($req, $res) {
    $handler = $this->notFoundHandler; // handle using the default Slim page not found handler
    return $handler($req, $res);
});


// Run app
$app->run();