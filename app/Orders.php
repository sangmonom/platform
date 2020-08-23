<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $fillable=['codeno','date','status','user_id','payments_id'];
}
