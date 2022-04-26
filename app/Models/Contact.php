<?php

namespace App\Models;

use App\Scopes\OwnerScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name', 'contact_number', 'email',
    ];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new OwnerScope);

        static::creating(function ($model) {
            $model->user_id = auth()->user()->id;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
