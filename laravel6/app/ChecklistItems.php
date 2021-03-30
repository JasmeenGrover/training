<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChecklistItems extends Model
{
    protected $fillable = [
      'type','key','value'
    ];
}
