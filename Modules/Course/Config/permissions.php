<?php

return [
    'course.courses' => [
        'index' => 'course::courses.list resource',
        'create' => 'course::courses.create resource',
        'edit' => 'course::courses.edit resource',
        'destroy' => 'course::courses.destroy resource',
    ],
    'course.categories' => [
        'index' => 'course::categories.list resource',
        'create' => 'course::categories.create resource',
        'edit' => 'course::categories.edit resource',
        'destroy' => 'course::categories.destroy resource',
    ],
    'course.teachers' => [
        'index' => 'course::teachers.list resource',
        'create' => 'course::teachers.create resource',
        'edit' => 'course::teachers.edit resource',
        'destroy' => 'course::teachers.destroy resource',
    ],
    'course.schedules' => [
        'index' => 'course::schedules.list resource',
        'create' => 'course::schedules.create resource',
        'edit' => 'course::schedules.edit resource',
        'destroy' => 'course::schedules.destroy resource',
    ],
    'course.registers' => [
        'index' => 'course::registers.list resource',
        'create' => 'course::registers.create resource',
        'edit' => 'course::registers.edit resource',
        'destroy' => 'course::registers.destroy resource',
    ],
// append





];
