<?php

namespace Modules\Course\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class ManagerTeacherOfCourse extends Model
{
    use Translatable;

    protected $table = 'manager_teacher_courses';
    public $translatedAttributes = [];
    protected $fillable = [];

    public function course() {
        return $this->hasOne(Course::class);
    }

    public function teacher() {
        return $this->hasOne(Teacher::class);
    }
}
