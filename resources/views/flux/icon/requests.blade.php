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
<svg id="Icona_richiesta_16_px" data-name="Icona richiesta 16 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <path id="Path_12072" data-name="Path 12072"
        d="M13.321,12.356v3.107H5.036V3.036h5.178V2H5.036A1.036,1.036,0,0,0,4,3.036V15.463A1.036,1.036,0,0,0,5.036,16.5h8.285a1.036,1.036,0,0,0,1.036-1.036V12.356Z"
        transform="translate(-1.93 -1.533)" fill="currentColor" />
    <path id="Path_12073" data-name="Path 12073"
        d="M20.118,3.948,18.409,2.239a.828.828,0,0,0-1.16,0L10,9.489v2.869h2.863l7.249-7.249a.828.828,0,0,0,0-1.16Zm-7.684,7.374h-1.4v-1.4L15.924,5.03l1.4,1.4ZM18.057,5.7l-1.4-1.4,1.175-1.175,1.4,1.4Z"
        transform="translate(-4.822 -1.535)" fill="currentColor" />
    <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
        fill="none" />
</svg>
