<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpertiseSkill extends Model
{
    protected $fillable = ['name', 'category_id'];

    function category() {
        return $this->belongsTo('App\ExpertiseCategory');
    }
}
