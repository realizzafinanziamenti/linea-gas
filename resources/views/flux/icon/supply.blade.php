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
<svg id="Icona_Cloud_upload_16_px" data-name="Icona Cloud upload 16 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <path id="Union_2" data-name="Union 2"
        d="M-825.369,476.8v-6.226l-1.326,1.32-.721-.722,2.558-2.558,2.559,2.558-.722.722-1.325-1.32V476.8Zm4.093-3.581V472.2h.256a2.3,2.3,0,0,0,2.394-2.21,2.3,2.3,0,0,0-2.21-2.394h-.439l-.051-.42a3.582,3.582,0,0,0-3.551-3.113,3.582,3.582,0,0,0-3.55,3.113l-.01.42h-.44a2.3,2.3,0,0,0-2.21,2.394,2.3,2.3,0,0,0,2.395,2.21h.256v1.023h-.256a3.326,3.326,0,0,1-3.289-2.991,3.327,3.327,0,0,1,2.623-3.589,4.606,4.606,0,0,1,4.5-3.64,4.605,4.605,0,0,1,4.5,3.64,3.326,3.326,0,0,1,2.623,3.589,3.326,3.326,0,0,1-3.288,2.991Z"
        transform="translate(833.044 -462.335)" fill="currentColor" />
    <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
        fill="none" />
</svg>
