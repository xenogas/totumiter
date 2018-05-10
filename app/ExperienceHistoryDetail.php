<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienceHistoryDetail extends Model
{
    function history() {
        return $this->belongsTo('App\ExperienceHistory');
    }
}
