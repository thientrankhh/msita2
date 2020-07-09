<?php

namespace Modules\Course\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Entities\Sentinel\User;

class Schedule extends Model
{
    use Translatable;

    protected $table = 'course__schedules';
    public $translatedAttributes = [];
    protected $fillable = [];

    public function course() {
        return $this->belongsTo(Schedule::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}
