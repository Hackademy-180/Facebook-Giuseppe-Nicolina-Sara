<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ["name", "surname", "birthday", "bio", "img", "user_id"];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
