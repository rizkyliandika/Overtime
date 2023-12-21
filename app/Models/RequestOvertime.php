<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestOvertime extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'date',
        'start_time',
        'end_time',
        'status'
    ];

    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}
