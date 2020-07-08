<?php

namespace Modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;

class TeacherTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'course__teacher_translations';
}
