<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TempUser extends Model
{
    protected $table="temp_user";
    protected $fillable = ['email','rand_key'];
}
