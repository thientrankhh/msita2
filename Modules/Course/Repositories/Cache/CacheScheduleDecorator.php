<?php

namespace Modules\Course\Repositories\Cache;

use Modules\Course\Repositories\ScheduleRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheScheduleDecorator extends BaseCacheDecorator implements ScheduleRepository
{
    public function __construct(ScheduleRepository $schedule)
    {
        parent::__construct();
        $this->entityName = 'course.schedules';
        $this->repository = $schedule;
    }
}
