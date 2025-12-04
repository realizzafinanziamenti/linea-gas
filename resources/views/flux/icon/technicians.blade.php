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
<svg id="Icona_tecnici_24_px" data-name="Icona tecnici 24 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <g id="SVG_image_9" data-name="SVG image 9">
        <path id="Union_20" data-name="Union 20"
            d="M-178,477v-2.5a1.5,1.5,0,0,0-1.5-1.5h-2a1.5,1.5,0,0,0-1.5,1.5V477h-1v-2.5a2.5,2.5,0,0,1,2.5-2.5h2a2.5,2.5,0,0,1,2.5,2.5V477Zm-5-8.5a2.5,2.5,0,0,1,2.5-2.5,2.5,2.5,0,0,1,2.5,2.5,2.5,2.5,0,0,1-2.5,2.5A2.5,2.5,0,0,1-183,468.5Zm1,0a1.5,1.5,0,0,0,1.5,1.5,1.5,1.5,0,0,0,1.5-1.5,1.5,1.5,0,0,0-1.5-1.5A1.5,1.5,0,0,0-182,468.5Zm8,1.5v-1.05a2.486,2.486,0,0,1-.877-.366l-.745.745-.707-.707.745-.744a2.473,2.473,0,0,1-.365-.877H-177v-1h1.051a2.467,2.467,0,0,1,.365-.877l-.744-.745.706-.707.745.744a2.467,2.467,0,0,1,.877-.365V463h1v1.051a2.474,2.474,0,0,1,.877.365l.744-.744.707.707-.745.745a2.485,2.485,0,0,1,.366.877H-170v1h-1.05a2.492,2.492,0,0,1-.366.877l.745.745-.707.706-.744-.745a2.493,2.493,0,0,1-.877.366V470Zm-1-3.5a1.5,1.5,0,0,0,1.5,1.5,1.5,1.5,0,0,0,1.5-1.5,1.5,1.5,0,0,0-1.5-1.5A1.5,1.5,0,0,0-175,466.5Z"
            transform="translate(185 -462)" fill="currentColor" />
        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
            fill="none" />
    </g>
</svg>
