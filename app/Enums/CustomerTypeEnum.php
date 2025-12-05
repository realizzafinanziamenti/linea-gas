<?php

namespace App\Enums;

enum CustomerTypeEnum: string
{
    case PRIVATE = 'private';
    case COMPANY = 'company';
    case CONDOMINIUM = 'condominium';

    /**
     * Get the label.
     *
     * @return string
     */
    public function label(): string
    {
        return match ($this) {
            self::PRIVATE => __('customer.customer_types.private'),
            self::COMPANY => __('customer.customer_types.company'),
            self::CONDOMINIUM => __('customer.customer_types.condominium'),
        };
    }

    /**
     * Get all pagination options as key-value pairs.
     *
     * @return array
     */
    public static function options(): array
    {
        $options = [];
        foreach (self::cases() as $case) {
            $options[$case->value] = $case->value;
        }
        return $options;
    }
}
