<?php

namespace App\Traits;

use App\Scopes\OwnerScope;

trait ContactOwner
{
    protected static function bootContactOwner()
    {
        static::addGlobalScope(new OwnerScope);

        if (auth()->check()) {
            static::creating(function ($model) {
                $model->user_id = auth()->user()->id;
            });
        }
    }

}
