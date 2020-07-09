<?php

namespace Modules\Course\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use Translatable;

    protected $table = 'course__teachers';
    public $translatedAttributes = [];
    protected $fillable = [];

    public function managerTeacher() {
        return $this->hasOne(ManagerTeacherOfCourse::class);
    }
}
