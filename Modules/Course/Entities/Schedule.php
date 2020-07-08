<?php

namespace Modules\Course\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use Translatable;

    protected $table = 'course__schedules';
    public $translatedAttributes = [];
    protected $fillable = [];
}
