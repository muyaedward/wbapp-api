@component('emails.components.layout', ['template' => $template])
    {{-- Header --}}
    @slot('header')
        @component('emails.components.header', [
            'url' => '#',
            'logourl' => 'https://www.writersbayapp.com/img/logo.png'
            ])
            WritersBay App
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
            &copy; {{ date('Y') }} WritersBay App. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
