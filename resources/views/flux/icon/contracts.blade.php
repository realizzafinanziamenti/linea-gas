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
<svg id="Icona_contratti_24_px" data-name="Icona contratti 24 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <g id="SVG_image_11" data-name="SVG image 11">
        <path id="Union_18" data-name="Union 18"
            d="M-226.5,477v-2.207l2.517-2.517A2.179,2.179,0,0,1-224,472a2.5,2.5,0,0,1,1.607-2.336,2.5,2.5,0,0,1,2.756.668,2.5,2.5,0,0,1,.36,2.812,2.5,2.5,0,0,1-2.5,1.34L-224.293,477Zm4.278-6.342a1.517,1.517,0,0,0-.736,1.677l.062.27-2.6,2.6V476h.794l2.6-2.6.269.062a1.518,1.518,0,0,0,1.677-.735,1.518,1.518,0,0,0-.251-1.814,1.518,1.518,0,0,0-1.074-.445A1.512,1.512,0,0,0-222.223,470.658ZM-231,477a1,1,0,0,1-1-1V464a1,1,0,0,1,1-1h8a1,1,0,0,1,1,1v4.5h-1V464h-8v12h3v1Zm1-2v-1h2v1Zm8-2.5a.5.5,0,0,1,.5-.5.5.5,0,0,1,.5.5.5.5,0,0,1-.5.5A.5.5,0,0,1-222,472.5Zm-8-2.5v-1h3v1Zm0-2v-1h6v1Zm0-2v-1h6v1Z"
            transform="translate(234 -462)" fill="currentColor" />
        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
            fill="none" />
    </g>
</svg>
