<?php

namespace Database\Seeders;

use App\Enums\PermissionEnum;
use App\Enums\RoleEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /* Reset cached roles and permissions */
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        /* Create permissions */
        foreach (PermissionEnum::cases() as $permission) {
            Permission::updateOrCreate(['name' => $permission->value]);
        }

        /* Update cache to know about the newly created permissions (required if using WithoutModelEvents in seeders) */
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        /* Create roles */
        foreach (RoleEnum::cases() as $role) {
            $role = Role::updateOrCreate(['name' => $role->value]);

            /* Sync permissions */
            $this->syncPermissionsRole($role);
        }
    }

    /**
     * Sync permissions to role.
     */
    protected function syncPermissionsRole(Role $role): void
    {
        switch ($role->name) {
            case RoleEnum::BACK_OFFICE->value:
                $role->syncPermissions([
                    PermissionEnum::ACCESS_DASHBOARD->value,

                    // CLIENTI
                    PermissionEnum::LIST_CUSTOMERS->value,
                    PermissionEnum::VIEW_CUSTOMERS->value,
                    PermissionEnum::CREATE_CUSTOMERS->value,
                    PermissionEnum::EDIT_CUSTOMERS->value,
                    PermissionEnum::DELETE_CUSTOMERS->value,

                    // CALENDARIO
                    PermissionEnum::ACCESS_CALENDAR->value,

                    // INTERVENTI
                    PermissionEnum::LIST_OPERATIONS->value,
                    PermissionEnum::VIEW_OPERATIONS->value,
                    PermissionEnum::CREATE_OPERATIONS->value,
                    PermissionEnum::EDIT_OPERATIONS->value,
                    PermissionEnum::DELETE_OPERATIONS->value,

                    // RICHIESTE
                    PermissionEnum::LIST_QUOTES->value,
                    PermissionEnum::VIEW_QUOTES->value,
                    PermissionEnum::CREATE_QUOTES->value,
                    PermissionEnum::EDIT_QUOTES->value,
                    PermissionEnum::DELETE_QUOTES->value,
                ]);
                break;
            case RoleEnum::TECHNICIAN->value:
                $role->syncPermissions([
                    PermissionEnum::ACCESS_DASHBOARD->value,

                    // PIANIFICAZIONE
                    PermissionEnum::ACCESS_CALENDAR->value,

                    // INTERVENTI
                    PermissionEnum::LIST_OPERATIONS->value,
                    PermissionEnum::VIEW_OPERATIONS->value,
                ]);
                break;
            case RoleEnum::CUSTOMER->value:
                $role->syncPermissions([
                    PermissionEnum::ACCESS_DASHBOARD->value,

                    // INTERVENTI
                    PermissionEnum::LIST_OPERATIONS->value,
                    PermissionEnum::VIEW_OPERATIONS->value,
                    PermissionEnum::CREATE_OPERATIONS->value,

                    // PREVENTIVI
                    PermissionEnum::LIST_QUOTES->value,
                    PermissionEnum::VIEW_QUOTES->value,

                    // DOCUMENTI
                    PermissionEnum::LIST_DOCUMENTS->value,
                    PermissionEnum::VIEW_DOCUMENTS->value,

                    // CONTRATTI
                    PermissionEnum::LIST_CONTRACTS->value,
                    PermissionEnum::VIEW_CONTRACTS->value,

                    // PAGAMENTI
                    PermissionEnum::LIST_PAYMENTS->value,
                    PermissionEnum::VIEW_PAYMENTS->value,
                    PermissionEnum::CREATE_PAYMENTS->value,
                ]);
                break;
        }
    }
}
