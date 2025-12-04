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
<svg id="Icona_home_24_px" data-name="Icona home 24 px" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
    viewBox="0 0 16 16">
    <g id="SVG_image_4" data-name="SVG image 4">
        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
            fill="none" />
        <path id="Path_11804" data-name="Path 11804"
            d="M8.806,2.107a.5.5,0,0,0-.621,0L1,7.71l.621.786L2.5,7.81V14a1,1,0,0,0,1,1h10a1,1,0,0,0,1-1V7.815l.879.685L16,7.714ZM9.5,14h-2V10h2Zm1,0V10a1,1,0,0,0-1-1h-2a1,1,0,0,0-1,1v4h-3V7.031l5-3.895,5,3.9V14Z"
            transform="translate(-0.5 -1)" fill="currentColor" />
    </g>
</svg>
