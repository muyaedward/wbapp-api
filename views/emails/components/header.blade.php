<style>
    .img-responsive {
        max-width: 100%;
        padding: 10px;
        height: auto;
    }
</style>

<tr>
    <td class="header">
        <a align="center" href="{{ $template['url'] }}">
            @if($template['logo'] !== null || $template['logo'] !== '')
                <img src="{{ $template['logo'] }}" width="400px" alt="{{ $slot }}" class="img-responsive">
            @else
                <h1 align="center" style="font-size: 24px;">{{ $slot }}</h1>
            @endif
        </a>
    </td>
</tr>