<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class PersonsInformalCourse extends Model
{
    use CrudTrait;

    protected $table = 'persons_informal_courses';

    protected $fillable = [
        'person_id',
        'type',
        'name',
        'hours_count',
        'place_name',
        'notes',
    ];

    protected $dates = ['from_date', 'to_date'];

    public function person()  {
        return $this->belongsTo('App\Models\Person');
    }

}