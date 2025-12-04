   @props([
       'route' => '#',
       'icon' => null,
       'active' => false,
   ])

   {{-- Sidebar item --}}
   <a href="{{ $route }}" wire:navigate
       class="flex items-center gap-x-2 text-sm h-9 px-4
       {{ $active
           ? 'text-blue-main bg-zinc-100 border-l-4 pl-[calc(1rem-4px)] border-blue-main'
           : 'text-gray-text-light bg-white hover:text-gray-text-main hover:bg-zinc-100' }}">

       @if ($icon)
           <x-icon :name="$icon" class="size-4" />
       @endif

       <span class="inline-block">
           {{ $slot }}
       </span>
   </a>
