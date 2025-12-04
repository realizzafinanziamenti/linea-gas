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
<svg id="Icona_azienda_16_px" data-name="Icona azienda 16 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <rect id="Rectangle_1387" data-name="Rectangle 1387" width="16" height="16" fill="none" />
    <g id="SVG_image_5" data-name="SVG image 5">
        <path id="Path_11827" data-name="Path 11827"
            d="M15.765,4.075a.5.5,0,0,0-.5,0L11,6.19V4.5a.5.5,0,0,0-.725-.445L6,6.19V2.5A.5.5,0,0,0,5.5,2h-3a.5.5,0,0,0-.5.5V15H16V4.5A.5.5,0,0,0,15.765,4.075ZM12,14H10V10.5h2Zm3,0H13V10a.5.5,0,0,0-.5-.5h-3A.5.5,0,0,0,9,10v4H3V3H5V7.81l5-2.5v2.5l5-2.5Z"
            transform="translate(-1 -1)" fill="currentColor" />
        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
            fill="none" />
    </g>
</svg>
