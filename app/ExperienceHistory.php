<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DateTime;

class ExperienceHistory extends Model
{
    /**
     * Returns the details associated with this position
     */
    function details() {
        return $this->hasMany('App\ExperienceHistoryDetail', 'history_id')->where('type', 1);
    }

    function slugs() {
        return $this->hasMany('App\ExperienceHistoryDetail', 'history_id')->where('type', 2);
    }

    /**
     * Returns the company at which this position was worked
     */
    function company() {
        return $this->belongsTo('App\ExperienceCompany');
    }

    /**
     * Convert the start date into a PHP Date object and return it
     */
    function getStartAttribute($date) {
        return new DateTime($date);
    }

    /**
     * Convert the until date into a PHP Date object and return it
     */
    function getUntilAttribute($date) {
        return new DateTime($date);
    }

    /**
     * Foramt the timespan spent at this job
     */
    function getSpanDatesAttribute($value) {
        return "{$this->start->format('M, y')} — {$this->until->format('M, y')}";
    }
}
