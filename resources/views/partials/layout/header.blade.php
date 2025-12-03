<header
    class="h-[70px] w-full px-4 shrink-0 flex items-center justify-end gap-x-10 bg-white shadow-[0px_1px_4px_#15223214]">

    <div class="flex items-center gap-x-4">
        {{-- Notifications Button --}}
        <button class="cursor-pointer">
            <flux:icon.notification-bell class="size-5.5" />
        </button>

        {{-- Settings Button --}}
        <button class="cursor-pointer">
            <flux:icon.settings class="size-5.5" />
        </button>
    </div>

    <div class="min-w-[150px] max-w-[250px] flex items-center gap-x-2.5">
        {{-- User Avatar --}}
        <div class="w-11 h-11 shrink-0 rounded-full">
            <img src="{{ asset('images/placeholder-avatar.jpg') }}" alt="{{ __('User Avatar') }}"
                class="w-full h-full object-cover rounded-full" />
        </div>

        <div class="flex-1 flex flex-col truncate">
            {{-- USER NAME --}}
            <div x-data="{ showTooltip: false }" x-init="const el = $refs.nameText;
            showTooltip = el.scrollWidth > el.clientWidth;" class="overflow-hidden">
                <span class="text-gray-text-main font-bold text-base truncate block" x-ref="nameText"
                    :title="showTooltip ? '{{ auth()->user()->name }}' : ''">
                    {{ auth()->user()->name }}
                </span>
            </div>

            {{-- USER ROLE --}}
            <div x-data="{ showTooltip: false }" x-init="const el = $refs.roleText;
            showTooltip = el.scrollWidth > el.clientWidth;" class="overflow-hidden">
                <span class="text-gray-text-light text-xs truncate block" x-ref="roleText"
                    :title="showTooltip ? '{{ auth()->user()->role_name }}' : ''">
                    {{ auth()->user()->role_name }}
                </span>
            </div>

        </div>
    </div>

</header>
