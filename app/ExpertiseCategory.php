<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpertiseCategory extends Model
{
    protected $fillable = ['name', 'weight'];

    function skills() {
        return  $this->hasMany('App\ExpertiseSkill', 'category_id');
    }
}
