<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = "events";

    protected $fileable = ['name', 'categoryId', 'imageId', 'date', 'hour', 'location', 'assistants', 'vacancies'];
}
