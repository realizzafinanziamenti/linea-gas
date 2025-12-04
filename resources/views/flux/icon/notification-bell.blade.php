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
<svg id="Icona_notifica_24_px" data-name="Icona notifica 24 px" xmlns="http://www.w3.org/2000/svg" width="24"
    height="24" viewBox="0 0 24 24">
    <g id="SVG_image_6" data-name="SVG image 6" transform="translate(0 0.043)">
        <path id="Path_11729" data-name="Path 11729"
            d="M22.246,14.7l-2.027-2.027V9.984a7.5,7.5,0,0,0-6.738-7.449V1h-1.5V2.535A7.5,7.5,0,0,0,5.246,9.984v2.685L3.219,14.7A.749.749,0,0,0,3,15.224V17.47a.749.749,0,0,0,.749.749H8.989V18.8a3.857,3.857,0,0,0,3.369,3.892,3.748,3.748,0,0,0,4.118-3.725v-.749h5.241a.749.749,0,0,0,.749-.749V15.224a.749.749,0,0,0-.219-.529Zm-7.267,4.273a2.246,2.246,0,1,1-4.492,0v-.749h4.492Zm5.989-2.246H4.5V15.535l2.027-2.027a.749.749,0,0,0,.219-.529V9.984a5.989,5.989,0,1,1,11.979,0v2.995a.749.749,0,0,0,.219.529l2.027,2.027Z"
            transform="translate(-0.754 -0.251)" fill="#262626" />
        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="24" height="24"
            transform="translate(0 -0.043)" fill="none" />
    </g>
</svg>
