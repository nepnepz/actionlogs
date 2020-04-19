<?php

namespace Nepnepz\Actionslog\Traits;

use Nepnepz\Actionslog\Entities\Log as LogModel;
use Illuminate\Support\Facades\Auth;

trait Log
{
    public function saveLog($action)
    {
        $this->log()->save(
            new LogModel([
                'user_id' => Auth::user()->id,
                'action' => $action
            ])
        );
    }

    public function log()
    {
        return $this->morphOne(LogModel::class, 'loggable')->latest('id');
    }

    public function logs()
    {
        return $this->morphMany(LogModel::class, 'loggable')->orderByDesc('id');
    }
}
