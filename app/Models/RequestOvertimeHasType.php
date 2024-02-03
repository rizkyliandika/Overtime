<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RequestOvertimeHasType extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'request_overtime_type';

    public function types(): BelongsTo
    {
        return $this->belongsTo(Type::class, 'type_id', 'id');
    }

    public function request_overtimes(): BelongsTo
    {
        return $this->belongsTo(RequestOvertime::class, 'request_overtime_id', 'id');
    }

}
