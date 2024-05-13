<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investments extends Model
{
    use HasFactory;
    protected $guarded = [];

    function package()
    {
        return $this->hasOne(Packages::class,'id','package_id');
    }

    function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }
}
