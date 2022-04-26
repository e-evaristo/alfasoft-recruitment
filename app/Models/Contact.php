<?php

namespace App\Models;

use App\Traits\ContactOwner;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use SoftDeletes;
    use HasFactory;
    use ContactOwner;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name', 'contact_number', 'email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
