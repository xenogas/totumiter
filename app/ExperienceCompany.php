<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienceCompany extends Model
{
    /**
     * Returns all work histories associated with this company
     */
    function histories() {
        return $this->hasMany('App\ExperienceHistory', 'company_id');
    }

    function getLocationAttribute($value) {
        return "{$this->city}, {$this->state}";
    }
}
