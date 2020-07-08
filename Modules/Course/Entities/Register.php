<?php

namespace Modules\Course\Entities;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use Translatable;

    protected $table = 'course__registers';
    public $translatedAttributes = [];
    protected $fillable = [];
}
