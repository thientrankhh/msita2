<?php

namespace Modules\Course\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Course\Events\Handlers\RegisterCourseSidebar;

class CourseServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->app['events']->listen(BuildingSidebar::class, RegisterCourseSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('courses', array_dot(trans('course::courses')));
            $event->load('categories', array_dot(trans('course::categories')));
            $event->load('teachers', array_dot(trans('course::teachers')));
            $event->load('schedules', array_dot(trans('course::schedules')));
            $event->load('registers', array_dot(trans('course::registers')));
            // append translations





        });
    }

    public function boot()
    {
        $this->publishConfig('course', 'permissions');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Course\Repositories\CourseRepository',
            function () {
                $repository = new \Modules\Course\Repositories\Eloquent\EloquentCourseRepository(new \Modules\Course\Entities\Course());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Course\Repositories\Cache\CacheCourseDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Course\Repositories\CategoryRepository',
            function () {
                $repository = new \Modules\Course\Repositories\Eloquent\EloquentCategoryRepository(new \Modules\Course\Entities\Category());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Course\Repositories\Cache\CacheCategoryDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Course\Repositories\TeacherRepository',
            function () {
                $repository = new \Modules\Course\Repositories\Eloquent\EloquentTeacherRepository(new \Modules\Course\Entities\Teacher());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Course\Repositories\Cache\CacheTeacherDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Course\Repositories\ScheduleRepository',
            function () {
                $repository = new \Modules\Course\Repositories\Eloquent\EloquentScheduleRepository(new \Modules\Course\Entities\Schedule());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Course\Repositories\Cache\CacheScheduleDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Course\Repositories\RegisterRepository',
            function () {
                $repository = new \Modules\Course\Repositories\Eloquent\EloquentRegisterRepository(new \Modules\Course\Entities\Register());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Course\Repositories\Cache\CacheRegisterDecorator($repository);
            }
        );
// add bindings





    }
}
