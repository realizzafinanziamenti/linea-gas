<x-layouts.app.sidebar :title="$title ?? null">
    <div class="flex-1 overflow-y-auto scrollbar-thin">
        {{ $slot }}
    </div>
</x-layouts.app.sidebar>
