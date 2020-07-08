<?php

namespace Modules\Course\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use Translatable;

    protected $table = 'course__courses';
    public $translatedAttributes = [];
    protected $fillable = [];
}
