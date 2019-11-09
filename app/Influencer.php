<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Influencer extends Model
{
    //

    public function getFirstNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getLastNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getGenderAttribute()
    {
        return $this->attributes['gender'] ? "female" : "male";
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->birthday)->age;
    }

}
