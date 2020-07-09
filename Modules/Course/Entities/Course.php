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

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function open_shedules() {
        return $this->hasMany(Schedule::class);
    }

    public function register_learns() {
        return $this->hasMany(Register::class);
    }

    public function managerTeacher() {
        return $this->hasOne(ManagerTeacherOfCourse::class);
    }
}
