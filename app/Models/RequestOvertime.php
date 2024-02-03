<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RequestOvertime extends Model
{
    use HasFactory;

    protected $fillable = [
        'tenant_id',
        'date',
        'start_time',
        'end_time',
        'status'
    ];

    public function types(): HasMany
    {
        return $this->hasMany(Type::class);
    }

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
