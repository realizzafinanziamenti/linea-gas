{{-- Credit: Lucide (https://lucide.dev) --}}

@props([
    'variant' => 'outline',
])

@php
    if ($variant === 'solid') {
        throw new \Exception('The "solid" variant is not supported in Lucide.');
    }

    $classes = Flux::classes('shrink-0')->add(
        match ($variant) {
            'outline' => '[:where(&)]:size-6',
            'solid' => '[:where(&)]:size-6',
            'mini' => '[:where(&)]:size-5',
            'micro' => '[:where(&)]:size-4',
        },
    );

    $strokeWidth = match ($variant) {
        'outline' => 2,
        'mini' => 2.25,
        'micro' => 2.5,
    };
@endphp

{{-- Your SVG code here: --}}
<svg id="Icona_clienti_24_px" data-name="Icona clienti 24 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <g id="SVG_image_8" data-name="SVG image 8">
        <path id="Union_21" data-name="Union 21"
            d="M-147,477v-2.5a2.5,2.5,0,0,0-2.5-2.5v-1a3.5,3.5,0,0,1,3.5,3.5V477Zm-4,0v-2.5a2.5,2.5,0,0,0-2.5-2.5h-3a2.5,2.5,0,0,0-2.5,2.5V477h-1v-2.5a3.5,3.5,0,0,1,3.5-3.5h3a3.5,3.5,0,0,1,3.5,3.5V477Zm0-8a2.5,2.5,0,0,0,2.5-2.5A2.5,2.5,0,0,0-151,464v-1a3.5,3.5,0,0,1,3.5,3.5A3.5,3.5,0,0,1-151,470Zm-7.5-2.5A3.5,3.5,0,0,1-155,463a3.5,3.5,0,0,1,3.5,3.5A3.5,3.5,0,0,1-155,470,3.5,3.5,0,0,1-158.5,466.5Zm1,0A2.5,2.5,0,0,0-155,469a2.5,2.5,0,0,0,2.5-2.5A2.5,2.5,0,0,0-155,464,2.5,2.5,0,0,0-157.5,466.5Z"
            transform="translate(161 -462)" fill="currentColor" />
        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
            fill="none" />
    </g>
</svg>
