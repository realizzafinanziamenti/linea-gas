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
<svg id="Icona_magazzino_24_px" data-name="Icona magazzino 24 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <g id="SVG_image_16" data-name="SVG image 16">
        <path id="Union_15" data-name="Union 15"
            d="M-340,476v-2h2v2Zm-3,0v-2h2v2Zm-8-1a1,1,0,0,1-1-1v-7a1,1,0,0,1,1-1h3v-2a1,1,0,0,1,1-1h4a1,1,0,0,1,1,1v2h3a1,1,0,0,1,1,1v2.5h-1V467h-12v7h6.5v1Zm4-9h4v-2h-4Zm7,7v-2h2v2Zm-3,0v-2h2v2Z"
            transform="translate(353 -462)" fill="currentColor" />
        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
            fill="none" />
    </g>
</svg>
