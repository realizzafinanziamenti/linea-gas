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
<svg id="Icona_pagamenti_24_px" data-name="Icona pagamenti 24 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <g id="SVG_image_13" data-name="SVG image 13">
        <path id="Union_17" data-name="Union 17"
            d="M-280,475v-1h14v1Zm0-2v-1h14v1Zm1-2a1,1,0,0,1-1-1v-6a1,1,0,0,1,1-1h12a1,1,0,0,1,1,1v6a1,1,0,0,1-1,1Zm0-1h12v-6h-12Zm4-3a2,2,0,0,1,2-2,2,2,0,0,1,2,2,2,2,0,0,1-2,2A2,2,0,0,1-275,467Zm1,0a1,1,0,0,0,1,1,1,1,0,0,0,1-1,1,1,0,0,0-1-1A1,1,0,0,0-274,467Zm4,0a1,1,0,0,1,1-1,1,1,0,0,1,1,1,1,1,0,0,1-1,1A1,1,0,0,1-270,467Zm-8,0a1,1,0,0,1,1-1,1,1,0,0,1,1,1,1,1,0,0,1-1,1A1,1,0,0,1-278,467Z"
            transform="translate(281 -461)" fill="currentColor" />
        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
            fill="none" />
    </g>
</svg>
