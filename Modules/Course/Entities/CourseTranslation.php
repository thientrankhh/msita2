<?php

namespace Modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;

class CourseTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'course__course_translations';
}
