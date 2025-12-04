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
<svg id="Icona_interventi_24_px" data-name="Icona interventi 24 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <g id="SVG_image_10" data-name="SVG image 10" transform="translate(0 0.139)">
        <path id="Union_19" data-name="Union 19"
            d="M-197.618,477.167l-2.038-2.039a3.206,3.206,0,0,1-3.172-1.1,3.208,3.208,0,0,1-.456-3.325l.29-.661,2.053,2.052a.505.505,0,0,0,.7,0,.493.493,0,0,0,.145-.349.493.493,0,0,0-.145-.349l-2.052-2.052.661-.291a3.207,3.207,0,0,1,3.326.457,3.207,3.207,0,0,1,1.1,3.172l2.038,2.038a1.728,1.728,0,0,1,.374,1.883,1.728,1.728,0,0,1-1.6,1.067A1.715,1.715,0,0,1-197.618,477.167Zm.7-.7a.758.758,0,0,0,1.048,0,.74.74,0,0,0,.217-.524.74.74,0,0,0-.217-.523l-2.454-2.454.093-.288a2.216,2.216,0,0,0-.315-1.992,2.221,2.221,0,0,0-1.8-.915c-.041,0-.083,0-.123,0l.923.924a1.481,1.481,0,0,1,0,2.1,1.517,1.517,0,0,1-2.094,0l-.924-.924c0,.04,0,.082,0,.123a2.22,2.22,0,0,0,.914,1.8,2.222,2.222,0,0,0,1.993.316l.288-.094Zm-10.093.217A.99.99,0,0,1-208,475.7V465.33a.991.991,0,0,1,.987-.988h1.481v-.493a.99.99,0,0,1,.987-.987h3.95a.99.99,0,0,1,.988.987v.493h1.481a.991.991,0,0,1,.987.988V467.8h-.987V465.33h-1.481v1.481h-5.926V465.33h-1.481V475.7h3.457v.987Zm2.469-10.863h3.95v-1.975h-3.95Z"
            transform="translate(210.469 -461.813)" fill="currentColor" />
        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="16" height="16"
            transform="translate(0 -0.139)" fill="none" />
    </g>
</svg>
