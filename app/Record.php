<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected  $fillable = [
        'name', 'surname', 'number', 'year'
    ];

    protected $dates = [
        'year'
    ];

    public function setYearAttribute($date)
    {
        $this->attributes['year'] = Carbon::createFromFormat('Y-m-d', $date);
    }
}
