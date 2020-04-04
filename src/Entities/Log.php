<?php

namespace Nepnepz\Actionslog\Entities;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $fillable = [
        'user_id',
        'action'
    ];

    public function logable()
    {
        return $this->morphTo();
    }
}
