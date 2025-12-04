    @php
        use App\Enums\PermissionEnum;
    @endphp

    <nav class="flex-1 overflow-y-auto scrollbar-none flex flex-col gap-y-3 py-4 pb-20">
        {{-- HOME --}}
        @can(PermissionEnum::ACCESS_DASHBOARD->value)
            <x-navlist.group header="{{ __('sidebar.headers.home') }}">
                {{-- DASHBOARD --}}
                <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('dashboard')" icon="home">
                    {{ __('sidebar.dashboard') }}
                </x-navlist.item>
            </x-navlist.group>
        @endcan

        {{-- ANAGRAFICHE --}}
        @canany([PermissionEnum::ACCESS_CUSTOMERS->value, PermissionEnum::ACCESS_SUPPLIERS->value,
            PermissionEnum::ACCESS_TECHNICIANS->value])
            <x-navlist.group header="{{ __('sidebar.headers.personal_details') }}">
                {{-- CLIENTI --}}
                @can(PermissionEnum::ACCESS_CUSTOMERS->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="customers">
                        {{ __('sidebar.customers') }}
                    </x-navlist.item>
                @endcan

                {{-- FORNITORI --}}
                @can(PermissionEnum::ACCESS_SUPPLIERS->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="account-info">
                        {{ __('sidebar.suppliers') }}
                    </x-navlist.item>
                @endcan

                {{-- TECNICI --}}
                @can(PermissionEnum::ACCESS_TECHNICIANS->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="technicians">
                        {{ __('sidebar.technicians') }}
                    </x-navlist.item>
                @endcan
            </x-navlist.group>
        @endcanany

        {{-- GESTIONE COMMERCIALE --}}
        @canany([PermissionEnum::ACCESS_CALENDAR->value, PermissionEnum::ACCESS_OPERATIONS->value,
            PermissionEnum::ACCESS_QUOTES->value, PermissionEnum::ACCESS_REQUESTS->value,
            PermissionEnum::ACCESS_CONTRACTS->value, PermissionEnum::ACCESS_DOCUMENTS->value])
            <x-navlist.group header="{{ __('sidebar.headers.commercial_management') }}">
                {{-- PIANIFICAZIONE --}}
                @can(PermissionEnum::ACCESS_CALENDAR->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="calendar">
                        {{ __('sidebar.planning') }}
                    </x-navlist.item>
                @endcan

                {{-- INTERVENTI --}}
                @can(PermissionEnum::ACCESS_OPERATIONS->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="operations">
                        {{ __('sidebar.operations') }}
                    </x-navlist.item>
                @endcan

                {{-- PREVENTIVI --}}
                @can(PermissionEnum::ACCESS_QUOTES->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="quotes">
                        {{ __('sidebar.quotes') }}
                    </x-navlist.item>
                @endcan

                {{-- RICHIESTE --}}
                @can(PermissionEnum::ACCESS_REQUESTS->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="requests">
                        {{ __('sidebar.requests') }}
                    </x-navlist.item>
                @endcan

                {{-- CONTRATTI --}}
                @can(PermissionEnum::ACCESS_CONTRACTS->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="contracts">
                        {{ __('sidebar.contracts') }}
                    </x-navlist.item>
                @endcan

                {{-- DOCUMENTI --}}
                @can(PermissionEnum::ACCESS_DOCUMENTS->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="documents">
                        {{ __('sidebar.documents') }}
                    </x-navlist.item>
                @endcan
            </x-navlist.group>
        @endcanany

        {{-- GESTIONE CONTABILITà --}}
        @canany([PermissionEnum::ACCESS_INVOICES->value, PermissionEnum::ACCESS_DELIVERY_NOTES->value,
            PermissionEnum::ACCESS_PURCHASE_ORDERS->value, PermissionEnum::ACCESS_CREDIT_NOTES->value,
            PermissionEnum::ACCESS_PAYMENTS->value])
            <x-navlist.group header="{{ __('sidebar.headers.accounting_management') }}">
                {{-- FATTURAZIONE --}}
                @can(PermissionEnum::ACCESS_INVOICES->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="invoices">
                        {{ __('sidebar.invoices') }}
                    </x-navlist.item>
                @endcan

                {{-- DDT --}}
                @can(PermissionEnum::ACCESS_DELIVERY_NOTES->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="delivery-notes">
                        {{ __('sidebar.delivery_notes') }}
                    </x-navlist.item>
                @endcan

                {{-- APPROVVIGIONAMENTO --}}
                @can(PermissionEnum::ACCESS_PURCHASE_ORDERS->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="supply">
                        {{ __('sidebar.supply') }}
                    </x-navlist.item>
                @endcan

                {{-- NOTE DI CREDITO --}}
                @can(PermissionEnum::ACCESS_CREDIT_NOTES->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="credit-notes">
                        {{ __('sidebar.credit_notes') }}
                    </x-navlist.item>
                @endcan

                {{-- PAGAMENTI --}}
                @can(PermissionEnum::ACCESS_PAYMENTS->value)
                    <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="payments">
                        {{ __('sidebar.payments') }}
                    </x-navlist.item>
                @endcan
            </x-navlist.group>
        @endcanany

        {{-- GESTIONE MAGAZZINO --}}
        @can(PermissionEnum::ACCESS_PRODUCTS->value)
            <x-navlist.group header="{{ __('sidebar.headers.warehouse_management') }}">
                {{-- MAGAZZINO --}}
                <x-navlist.item :route="route('dashboard')" :active="request()->routeIs('#')" icon="warehouse">
                    {{ __('sidebar.warehouse') }}
                </x-navlist.item>
            </x-navlist.group>
        @endcan
    </nav>
