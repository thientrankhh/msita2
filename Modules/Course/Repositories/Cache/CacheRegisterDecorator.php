<?php

namespace Modules\Course\Repositories\Cache;

use Modules\Course\Repositories\RegisterRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheRegisterDecorator extends BaseCacheDecorator implements RegisterRepository
{
    public function __construct(RegisterRepository $register)
    {
        parent::__construct();
        $this->entityName = 'course.registers';
        $this->repository = $register;
    }
}
