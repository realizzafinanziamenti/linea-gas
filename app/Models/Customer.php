<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    /** @use HasFactory<\Database\Factories\CustomerFactory> */
    use HasFactory, HasUlids, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'customer_type',
        'company_name',
        'vat_number',
        'civic_number',
        'stair',
        'floor',
        'interior',
        'locality',
        'zone',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            // 'company_name' => 'string', // Example cast
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
}
