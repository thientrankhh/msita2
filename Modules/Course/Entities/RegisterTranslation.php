<?php

namespace Modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;

class RegisterTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'course__register_translations';
}
