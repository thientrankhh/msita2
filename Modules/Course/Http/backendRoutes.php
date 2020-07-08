<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/course'], function (Router $router) {
    $router->bind('course', function ($id) {
        return app('Modules\Course\Repositories\CourseRepository')->find($id);
    });
    $router->get('courses', [
        'as' => 'admin.course.course.index',
        'uses' => 'CourseController@index',
        'middleware' => 'can:course.courses.index'
    ]);
    $router->get('courses/create', [
        'as' => 'admin.course.course.create',
        'uses' => 'CourseController@create',
        'middleware' => 'can:course.courses.create'
    ]);
    $router->post('courses', [
        'as' => 'admin.course.course.store',
        'uses' => 'CourseController@store',
        'middleware' => 'can:course.courses.create'
    ]);
    $router->get('courses/{course}/edit', [
        'as' => 'admin.course.course.edit',
        'uses' => 'CourseController@edit',
        'middleware' => 'can:course.courses.edit'
    ]);
    $router->put('courses/{course}', [
        'as' => 'admin.course.course.update',
        'uses' => 'CourseController@update',
        'middleware' => 'can:course.courses.edit'
    ]);
    $router->delete('courses/{course}', [
        'as' => 'admin.course.course.destroy',
        'uses' => 'CourseController@destroy',
        'middleware' => 'can:course.courses.destroy'
    ]);
    $router->bind('category', function ($id) {
        return app('Modules\Course\Repositories\CategoryRepository')->find($id);
    });
    $router->get('categories', [
        'as' => 'admin.course.category.index',
        'uses' => 'CategoryController@index',
        'middleware' => 'can:course.categories.index'
    ]);
    $router->get('categories/create', [
        'as' => 'admin.course.category.create',
        'uses' => 'CategoryController@create',
        'middleware' => 'can:course.categories.create'
    ]);
    $router->post('categories', [
        'as' => 'admin.course.category.store',
        'uses' => 'CategoryController@store',
        'middleware' => 'can:course.categories.create'
    ]);
    $router->get('categories/{category}/edit', [
        'as' => 'admin.course.category.edit',
        'uses' => 'CategoryController@edit',
        'middleware' => 'can:course.categories.edit'
    ]);
    $router->put('categories/{category}', [
        'as' => 'admin.course.category.update',
        'uses' => 'CategoryController@update',
        'middleware' => 'can:course.categories.edit'
    ]);
    $router->delete('categories/{category}', [
        'as' => 'admin.course.category.destroy',
        'uses' => 'CategoryController@destroy',
        'middleware' => 'can:course.categories.destroy'
    ]);
    $router->bind('teacher', function ($id) {
        return app('Modules\Course\Repositories\TeacherRepository')->find($id);
    });
    $router->get('teachers', [
        'as' => 'admin.course.teacher.index',
        'uses' => 'TeacherController@index',
        'middleware' => 'can:course.teachers.index'
    ]);
    $router->get('teachers/create', [
        'as' => 'admin.course.teacher.create',
        'uses' => 'TeacherController@create',
        'middleware' => 'can:course.teachers.create'
    ]);
    $router->post('teachers', [
        'as' => 'admin.course.teacher.store',
        'uses' => 'TeacherController@store',
        'middleware' => 'can:course.teachers.create'
    ]);
    $router->get('teachers/{teacher}/edit', [
        'as' => 'admin.course.teacher.edit',
        'uses' => 'TeacherController@edit',
        'middleware' => 'can:course.teachers.edit'
    ]);
    $router->put('teachers/{teacher}', [
        'as' => 'admin.course.teacher.update',
        'uses' => 'TeacherController@update',
        'middleware' => 'can:course.teachers.edit'
    ]);
    $router->delete('teachers/{teacher}', [
        'as' => 'admin.course.teacher.destroy',
        'uses' => 'TeacherController@destroy',
        'middleware' => 'can:course.teachers.destroy'
    ]);
    $router->bind('schedule', function ($id) {
        return app('Modules\Course\Repositories\ScheduleRepository')->find($id);
    });
    $router->get('schedules', [
        'as' => 'admin.course.schedule.index',
        'uses' => 'ScheduleController@index',
        'middleware' => 'can:course.schedules.index'
    ]);
    $router->get('schedules/create', [
        'as' => 'admin.course.schedule.create',
        'uses' => 'ScheduleController@create',
        'middleware' => 'can:course.schedules.create'
    ]);
    $router->post('schedules', [
        'as' => 'admin.course.schedule.store',
        'uses' => 'ScheduleController@store',
        'middleware' => 'can:course.schedules.create'
    ]);
    $router->get('schedules/{schedule}/edit', [
        'as' => 'admin.course.schedule.edit',
        'uses' => 'ScheduleController@edit',
        'middleware' => 'can:course.schedules.edit'
    ]);
    $router->put('schedules/{schedule}', [
        'as' => 'admin.course.schedule.update',
        'uses' => 'ScheduleController@update',
        'middleware' => 'can:course.schedules.edit'
    ]);
    $router->delete('schedules/{schedule}', [
        'as' => 'admin.course.schedule.destroy',
        'uses' => 'ScheduleController@destroy',
        'middleware' => 'can:course.schedules.destroy'
    ]);
    $router->bind('register', function ($id) {
        return app('Modules\Course\Repositories\RegisterRepository')->find($id);
    });
    $router->get('registers', [
        'as' => 'admin.course.register.index',
        'uses' => 'RegisterController@index',
        'middleware' => 'can:course.registers.index'
    ]);
    $router->get('registers/create', [
        'as' => 'admin.course.register.create',
        'uses' => 'RegisterController@create',
        'middleware' => 'can:course.registers.create'
    ]);
    $router->post('registers', [
        'as' => 'admin.course.register.store',
        'uses' => 'RegisterController@store',
        'middleware' => 'can:course.registers.create'
    ]);
    $router->get('registers/{register}/edit', [
        'as' => 'admin.course.register.edit',
        'uses' => 'RegisterController@edit',
        'middleware' => 'can:course.registers.edit'
    ]);
    $router->put('registers/{register}', [
        'as' => 'admin.course.register.update',
        'uses' => 'RegisterController@update',
        'middleware' => 'can:course.registers.edit'
    ]);
    $router->delete('registers/{register}', [
        'as' => 'admin.course.register.destroy',
        'uses' => 'RegisterController@destroy',
        'middleware' => 'can:course.registers.destroy'
    ]);
// append





});
