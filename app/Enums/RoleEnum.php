<?php

namespace App\Enums;

enum RoleEnum: string
{
    case SUPER_ADMIN = 'super-admin';
    case BACK_OFFICE = 'back-office';
    case TECHNICIAN = 'technician';
    case CUSTOMER = 'customer';

    public function label(): string
    {
        return match ($this) {
            self::SUPER_ADMIN => __('roles.super_admin'),
            self::BACK_OFFICE => __('roles.back_office'),
            self::TECHNICIAN => __('roles.technician'),
            self::CUSTOMER => __('roles.customer'),
        };
    }
}
