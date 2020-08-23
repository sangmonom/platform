<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
     protected $fillable=['name','phone','address','email','payment method','discount','type goods','logo','shippers_id'];
}
