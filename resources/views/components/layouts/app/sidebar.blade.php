<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('partials.head')
</head>

<body class="min-h-screen overflow-hidden bg-gray-bg">
    <div class="flex w-full h-screen">
        {{-- SIDEBAR --}}
        <div class="w-[250px] h-screen flex flex-col shrink-0 bg-white shadow-[4px_0px_10px_#00000005]">
            <sidebar class="flex-1 flex flex-col overflow-y-auto">
                {{-- Logo --}}
                <div class="flex items-center justify-center h-[70px] shrink-0">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ __('Logo') }}" class="h-[48px] w-auto">
                </div>

                @include('partials.layout.sidebar')
            </sidebar>
        </div>

        {{-- MAIN WRAPPER --}}
        <div class="flex-1 flex flex-col overflow-hidden h-screen">

            {{-- HEADER --}}
            @include('partials.layout.header')

            {{-- MAIN CONTENT --}}
            {{ $slot }}

        </div>
    </div>

    @fluxScripts

    {{-- TOASTER --}}
    {{-- Needed to livewire toaster library --}}
    @persist('toaster')
        <x-toaster-hub />
    @endpersist

    {{-- Necessary for persisting the toaster --}}
    <style>
        div[x-persist="toaster"] {
            position: fixed;
        }
    </style>
    {{-- END TOASTER --}}
</body>

</html>
