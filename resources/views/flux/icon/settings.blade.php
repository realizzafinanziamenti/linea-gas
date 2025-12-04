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
<svg id="Icona_setting_24_px" data-name="Icona setting 24 px" xmlns="http://www.w3.org/2000/svg" width="24"
    height="24" viewBox="0 0 24 24">
    <g id="SVG_image_7" data-name="SVG image 7" transform="translate(0 0)">
        <path id="Path_11730" data-name="Path 11730"
            d="M21.019,13.179V12.021l1.453-1.271a1.513,1.513,0,0,0,.288-1.93L20.974,5.793a1.527,1.527,0,0,0-1.793-.681l-1.839.621a8.589,8.589,0,0,0-.991-.568l-.386-1.907A1.514,1.514,0,0,0,14.451,2.04H10.909A1.513,1.513,0,0,0,9.4,3.258L9.01,5.165a8.687,8.687,0,0,0-1,.568l-1.8-.651a1.513,1.513,0,0,0-.484-.045,1.513,1.513,0,0,0-1.309.757L2.63,8.82a1.513,1.513,0,0,0,.31,1.9l1.43,1.309v1.158L2.94,14.458a1.514,1.514,0,0,0-.31,1.93l1.786,3.027A1.527,1.527,0,0,0,6.21,20.1l1.839-.621a8.589,8.589,0,0,0,.991.568l.386,1.907a1.513,1.513,0,0,0,1.513,1.218h3.572a1.513,1.513,0,0,0,1.513-1.218l.386-1.907a8.688,8.688,0,0,0,1-.568l1.831.621a1.527,1.527,0,0,0,1.793-.681l1.725-3.027a1.514,1.514,0,0,0-.31-1.9Zm-1.355,5.479-2.6-.878a6.7,6.7,0,0,1-2.051,1.188l-.537,2.717H10.909L10.372,19a7.083,7.083,0,0,1-2.043-1.188l-2.6.848L3.939,15.631,6,13.815a6.735,6.735,0,0,1,0-2.369L3.939,9.577,5.725,6.55l2.6.878A6.7,6.7,0,0,1,10.372,6.24l.537-2.717h3.572l.537,2.686A7.083,7.083,0,0,1,17.061,7.4l2.6-.848L21.45,9.577l-2.058,1.816a6.735,6.735,0,0,1,0,2.369l2.058,1.869Z"
            transform="translate(-0.587 -0.712)" fill="#262626" />
        <path id="Path_11731" data-name="Path 11731"
            d="M14.54,19.081a4.54,4.54,0,1,1,4.54-4.54,4.5,4.5,0,0,1-4.54,4.54Zm0-7.567a2.959,2.959,0,1,0,2.161.866A2.959,2.959,0,0,0,14.54,11.513Z"
            transform="translate(-2.433 -2.648)" fill="#262626" />
        <rect id="_Transparent_Rectangle_" data-name="&lt;Transparent Rectangle&gt;" width="24" height="24"
            transform="translate(0 0)" fill="none" />
    </g>
</svg>
