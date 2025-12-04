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
<svg id="Icona_calendario_24_px" data-name="Icona calendario 24 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <g id="SVG_image_2" data-name="SVG image 2">
        <path id="Path_11800" data-name="Path 11800"
            d="M15,3H13V2H12V3H8V2H7V3H5A1,1,0,0,0,4,4V14a1,1,0,0,0,1,1H15a1,1,0,0,0,1-1V4A1,1,0,0,0,15,3Zm0,11H5V7H15Zm0-8H5V4H7V5H8V4h4V5h1V4h2Z"
            transform="translate(-2 -1)" fill="currentColor" />
        <rect id="_Transparent_Rectangle_" width="16" height="16" fill="none" />
    </g>
</svg>
