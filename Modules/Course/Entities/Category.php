<?php

namespace Modules\Course\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Translatable;

    protected $table = 'course__categories';
    public $translatedAttributes = [];
    protected $fillable = [];

    public function courses() {
        return $this->hasMany(Course::class);
    }
}
