<?php

namespace Modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;

class ScheduleTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [];
    protected $table = 'course__schedule_translations';
}
