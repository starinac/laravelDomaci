<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable=['zeljeniCilj','pol', 'godine', 'aktivnost', 'userId'];
}
