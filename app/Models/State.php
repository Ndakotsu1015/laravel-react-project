<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Country;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country_id' => 'integer',
    ];

    public function lgas()
    {
        return $this->hasMany(Lga::class);
    }

    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}