<?php

namespace AdGoDev\LaravelNetworkErrorLogging\Models;

use Illuminate\Database\Eloquent\Model;

class NetworkErrorLog extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'age',
        'type',
        'url',
        'body',
    ];

    protected $casts = [
        'body' => 'object',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->created_at = $query->created_at ?? now();
        });
    }
}
