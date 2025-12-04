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
<svg id="Icona_rest_16_px" data-name="Icona rest 16 px" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
    viewBox="0 0 16 16">
    <path id="Path_11895" data-name="Path 11895"
        d="M9.622,16.172a6.086,6.086,0,1,0-6.086-6.086v3.144L1.71,11.4l-.71.71,3.043,3.043,3.043-3.043-.71-.71L4.55,13.231V10.086h0a5.072,5.072,0,1,1,5.072,5.072Z"
        transform="translate(-0.493 -2.201)" fill="currentColor" />
    <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
        fill="none" />
</svg>
