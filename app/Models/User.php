<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\RoleEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, TwoFactorAuthenticatable, HasRoles, SoftDeletes, HasUlids;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'phone',
        'birth_date',
        'hire_date',
        'tax_code',
        'address',
        'city',
        'province',
        'zip_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'birth_date' => 'date',
            'hire_date' => 'date',
        ];
    }

    /**
     * Get the unique identifiers for the model.
     *
     * @return array
     */
    public function uniqueIds(): array
    {
        return ['ulid'];
    }

    /**
     * Get the route key name for Laravel route model binding.
     */
    public function getRouteKeyName(): string
    {
        return 'ulid';
    }

    // HELPERS
    /* Get the user's initials */
    public function initials(): string
    {
        return Str::substr($this->first_name, 0, 1)
            . Str::substr($this->last_name, 0, 1);
    }

    /* Check if the user role is superadmin */
    public function isSuperAdmin(): bool
    {
        return $this->hasRole(RoleEnum::SUPER_ADMIN->value);
    }

    /* Check if the user role is customer */
    public function isCustomer(): bool
    {
        return $this->hasRole(RoleEnum::CUSTOMER->value);
    }

    /* Check if the user role is back office (secretary) */
    public function isBackOffice(): bool
    {
        return $this->hasRole(RoleEnum::BACK_OFFICE->value);
    }

    /* Check if the user role is technician */
    public function isTechnician(): bool
    {
        return $this->hasRole(RoleEnum::TECHNICIAN->value);
    }

    // ATTRIBUTES
    /* Get the user's role name attribute */
    protected function roleName(): Attribute
    {
        return Attribute::get(function () {
            $role = $this->getRoleNames()->first();

            if (!$role) {
                return null;
            }

            $roleEnum = RoleEnum::tryFrom($role);
            return $roleEnum?->label() ?? $role;
        });
    }

    /* Get the user's full name attribute */
    protected function fullName(): Attribute
    {
        return Attribute::get(fn() => "{$this->first_name} {$this->last_name}");
    }

    /* Formatted birth date (d/m/Y) or '-' if null */
    protected function formattedBirthDate(): Attribute
    {
        return Attribute::get(fn() => $this->birth_date?->format('d/m/Y') ?? '-');
    }

    /* Formatted birth date (d/m/Y) or '-' if null */
    protected function formattedHireDate(): Attribute
    {
        return Attribute::get(fn() => $this->hire_date?->format('d/m/Y') ?? '-');
    }

    // RELATIONSHIPS
    /* Get the customer associated with the user */
    public function customer(): HasOne
    {
        return $this->hasOne(Customer::class);
    }
}
