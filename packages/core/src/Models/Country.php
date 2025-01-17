<?php

namespace Lunar\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Lunar\Base\BaseModel;
use Lunar\Base\Traits\HasMacros;
use Lunar\Database\Factories\CountryFactory;

/**
 * @property int $id
 * @property string $name
 * @property string $iso3
 * @property ?string $iso2
 * @property string $phonecode
 * @property ?string $capital
 * @property string $currency
 * @property ?string $native
 * @property string $emoji
 * @property string $emoji_u
 * @property ?\Illuminate\Support\Carbon $created_at
 * @property ?\Illuminate\Support\Carbon $updated_at
 */
class Country extends BaseModel
{
    use HasFactory;
    use HasMacros;

    /**
     * Return a new factory instance for the model.
     *
     * @return \Lunar\Database\Factories\CountryFactory
     */
    protected static function newFactory(): CountryFactory
    {
        return CountryFactory::new();
    }

    /**
     * Define which attributes should be
     * protected from mass assignment.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Return the states relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states()
    {
        return $this->hasMany(State::class);
    }
}
