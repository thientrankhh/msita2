<?php

namespace Modules\Course\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;
use Modules\User\Entities\Sentinel\User;

class Register extends Model
{
    use Translatable;

    protected $table = 'course__registers';
    public $translatedAttributes = [];
    protected $fillable = [];

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function user() {
        return $this->hasOne(User::class);
    }
}
