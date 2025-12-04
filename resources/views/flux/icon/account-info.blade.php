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
<svg id="Icona_info_account_16_px" data-name="Icona info account 16 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <path id="Path_12015" data-name="Path 12015"
        d="M8.485,3A2.489,2.489,0,1,1,6,5.485,2.489,2.489,0,0,1,8.485,3m0-1A3.485,3.485,0,1,0,11.97,5.485,3.485,3.485,0,0,0,8.485,2Z"
        transform="translate(-2.51 -0.936)" fill="currentColor" />
    <path id="Path_12016" data-name="Path 12016"
        d="M11.957,23.974h-1V21.485A2.489,2.489,0,0,0,8.472,19H5.485A2.489,2.489,0,0,0,3,21.485v2.489H2V21.485A3.485,3.485,0,0,1,5.485,18H8.472a3.485,3.485,0,0,1,3.485,3.485Z"
        transform="translate(-1.004 -8.971)" fill="currentColor" />
    <path id="Path_12017" data-name="Path 12017" d="M22.991,13.373,21.7,12.084l-.7.7,1.991,1.991,3.485-3.485-.7-.7Z"
        transform="translate(-10.545 -5.25)" fill="currentColor" />
    <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
        fill="none" />
</svg>
