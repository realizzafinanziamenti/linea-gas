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
<svg id="Icona_documenti_24_px" data-name="Icona documenti 24 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <g id="SVG_image_12" data-name="SVG image 12">
        <path id="Path_11785" data-name="Path 11785"
            d="M6.585,5,8.3,6.7l.29.3H15v8H3V5H6.585m0-1H3A1,1,0,0,0,2,5V15a1,1,0,0,0,1,1H15a1,1,0,0,0,1-1V7a1,1,0,0,0-1-1H9l-1.7-1.7A1,1,0,0,0,6.585,4Z"
            transform="translate(-1 -2)" fill="currentColor" />
        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
            fill="none" />
    </g>
</svg>
