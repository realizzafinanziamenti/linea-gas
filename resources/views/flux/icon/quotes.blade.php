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
<svg id="Icona_Documenti_16_px" data-name="Icona Documenti 16 px" xmlns="http://www.w3.org/2000/svg" width="16"
    height="16" viewBox="0 0 16 16">
    <path id="Path_11984" data-name="Path 11984"
        d="M22.278,17.512,20.9,16.137a.443.443,0,0,0-.642,0L16,20.4v2.016h2.016l4.262-4.262A.443.443,0,0,0,22.278,17.512ZM17.65,21.5h-.733v-.733l2.291-2.291.733.733Zm2.933-2.933-.733-.733.733-.733.733.733Z"
        transform="translate(-7.668 -7.332)" fill="currentColor" />
    <rect id="Rectangle_1605" data-name="Rectangle 1605" height="1" transform="translate(5.334 11.785)"
        fill="currentColor" />
    <rect id="Rectangle_1606" data-name="Rectangle 1606" width="2" height="1"
        transform="translate(6.461 9.643)" fill="currentColor" />
    <rect id="Rectangle_1607" data-name="Rectangle 1607" height="1" transform="translate(5.334 9.643)"
        fill="currentColor" />
    <rect id="Rectangle_1608" data-name="Rectangle 1608" width="4" height="1"
        transform="translate(6.545 6.428)" fill="currentColor" />
    <rect id="Rectangle_1609" data-name="Rectangle 1609" height="1" transform="translate(5.334 6.428)"
        fill="currentColor" />
    <path id="Path_11985" data-name="Path 11985"
        d="M6.007,14.843V4.47H7.519V5.952h6.044V4.47h1.511V7.434h1.007V4.47a1,1,0,0,0-1.007-.988H13.563V2.988A1,1,0,0,0,12.556,2H8.526a1,1,0,0,0-1.007.988v.494H6.007A1,1,0,0,0,5,4.47V14.843a1,1,0,0,0,1.007.988H8.526v-.988ZM8.526,2.988h4.03V4.964H8.526Z"
        transform="translate(-2.709 -0.748)" fill="currentColor" />
    <rect id="_x3C_Transparent_Rectangle_x3E__155_" width="16" height="16" fill="none" />
</svg>
