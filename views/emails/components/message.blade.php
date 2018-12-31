@component('emails.components.layout', ['emailtemplate' => 'yellow'])
    {{-- Header --}}
    @slot('header')
        @component('emails.components.header', ['template' => $template])
            {{ $template['appname'] }}
        @endcomponent
    @endslot
    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('emails.components.subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('emails.components.footer')
            &copy; {{ date('Y') }} {{ $template['appname'] }}. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
