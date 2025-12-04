@props(['header'])

<div class="flex flex-col gap-y-1.5">
    <x-navlist.header :label="$header" />

    <div class="flex flex-col gap-y-3">
        {{ $slot }}
    </div>
</div>
