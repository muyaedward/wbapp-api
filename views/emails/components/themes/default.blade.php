<style>
    /* Base */

    body, body *:not(html):not(style):not(br):not(tr):not(code) {
        font-family: Avenir, Helvetica, sans-serif;
        box-sizing: border-box;
    }

    body {
        background-color: #d3ecea;
        color: #031b4e;
        height: 100%;
        hyphens: auto;
        line-height: 1.4;
        margin: 0;
        -moz-hyphens: auto;
        -ms-word-break: break-all;
        width: 100% !important;
        -webkit-hyphens: auto;
        -webkit-text-size-adjust: none;
        word-break: break-all;
        word-break: break-word;
    }

    p,
    ul,
    ol,
    blockquote {
        line-height: 1.4;
        text-align: left;
    }

    a {
        color: #005fe6;
    }

    a img {
        border: none;
    }

    /* Typography */

    h1 {
        color: #33302f;
        font-size: 19px;
        font-weight: bold;
        margin-top: 0;
    }

    h2 {
        color: #33302f;
        font-size: 16px;
        font-weight: bold;
        margin-top: 0;
        text-align: left;
    }

    h3 {
        color: #33302f;
        font-size: 14px;
        font-weight: bold;
        margin-top: 0;
        text-align: left;
    }

    p {
        color: #031b4e;
        font-size: 16px;
        line-height: 1.5em;
        margin-top: 0;
        text-align: left;
    }

    p.sub {
        font-size: 12px;
    }

    img {
        max-width: 100%;
    }

    /* Layout */

    .wrapper {
        background-color: #d3ecea;
        margin: 0;
        padding: 0;
        width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 100%;
    }

    .content {
        margin: 0;
        padding: 0;
        width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 100%;
    }

    /* Header */

    .header {
        padding: 25px 0;
        text-align: center;
    }

    .header a {
        color: #957a90;
        font-size: 19px;
        font-weight: bold;
        text-decoration: none;
        text-shadow: 0 1px 0 #a79999;
    }

    /* Body */

    .body {
        background-color: #eadfdf;
        border-bottom: 1px solid #06101e;
        border-top: 1px solid #06101e;
        margin: 0;
        padding: 0;
        width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 100%;
    }

    .inner-body {
        background-color: #f7f3f3;
        margin: 0 auto;
        padding: 0;
        width: 570px;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 570px;
    }

    /* Subcopy */

    .subcopy {
        border-top: 1px solid #0d1e38;
        margin-top: 25px;
        padding-top: 25px;
    }

    .subcopy p {
        font-size: 12px;
    }

    /* Footer */

    .footer {
        margin: 0 auto;
        padding: 0;
        text-align: center;
        width: 570px;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 570px;
    }

    .footer p {
        color: #aeaeae;
        font-size: 12px;
        text-align: center;
    }

    /* Tables */

    .table table {
        margin: 30px auto;
        width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 100%;
    }

    .table th {
        color: #031b4e;
        border-bottom: 1px solid #23416e;
        padding-bottom: 8px;
    }

    .table td {
        color: #031b4e;
        font-size: 15px;
        line-height: 18px;
        padding: 10px 0;
    }

    .content-cell {
        padding: 35px;
    }

    /* Buttons */

    .action {
        margin: 30px auto;
        padding: 0;
        text-align: center;
        width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 100%;
    }

    .button {
        border-radius: 3px;
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.16);
        color: #faf6f6;
        display: inline-block;
        text-decoration: none;
        -webkit-text-size-adjust: none;
    }

    .button-blue {
        background-color: #1f49ab;
        border-top: 10px solid #1f49ab;
        border-right: 18px solid #1f49ab;
        border-bottom: 10px solid #1f49ab;
        border-left: 18px solid #1f49ab;
    }

    .button-green {
        background-color: #12a318;
        border-top: 10px solid #12a318;
        border-right: 18px solid #12a318;
        border-bottom: 10px solid #12a318;
        border-left: 18px solid #12a318;
    }

    .button-red {
        background-color: #ef4706;
        border-top: 10px solid #ef4706;
        border-right: 18px solid #ef4706;
        border-bottom: 10px solid #ef4706;
        border-left: 18px solid #ef4706;
    }

    /* Panels */

    .panel {
        margin: 0 0 21px;
    }

    .panel-content {
        background-color: #c0cde0;
        padding: 16px;
    }

    .panel-item {
        padding: 0;
    }

    .panel-item p:last-of-type {
        margin-bottom: 0;
        padding-bottom: 0;
    }

    /* Promotions */

    .promotion {
        background-color: #FFFFFF;
        border: 2px dashed #9BA2AB;
        margin: 0;
        margin-bottom: 25px;
        margin-top: 25px;
        padding: 24px;
        width: 100%;
        -premailer-cellpadding: 0;
        -premailer-cellspacing: 0;
        -premailer-width: 100%;
    }

    .promotion h1 {
        text-align: center;
    }

    .promotion p {
        font-size: 15px;
        text-align: center;
    }

</style>