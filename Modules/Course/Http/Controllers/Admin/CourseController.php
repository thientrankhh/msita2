<?php

namespace Modules\Course\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Course\Entities\Course;
use Modules\Course\Http\Requests\CreateCourseRequest;
use Modules\Course\Http\Requests\UpdateCourseRequest;
use Modules\Course\Repositories\CourseRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class CourseController extends AdminBaseController
{
    /**
     * @var CourseRepository
     */
    private $course;

    public function __construct(CourseRepository $course)
    {
        parent::__construct();

        $this->course = $course;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $courses = $this->course->all();

        return view('course::admin.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('course::admin.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateCourseRequest $request
     * @return Response
     */
    public function store(CreateCourseRequest $request)
    {
        $this->course->create($request->all());

        return redirect()->route('admin.course.course.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('course::courses.title.courses')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Course $course
     * @return Response
     */
    public function edit(Course $course)
    {
        return view('course::admin.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Course $course
     * @param  UpdateCourseRequest $request
     * @return Response
     */
    public function update(Course $course, UpdateCourseRequest $request)
    {
        $this->course->update($course, $request->all());

        return redirect()->route('admin.course.course.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('course::courses.title.courses')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Course $course
     * @return Response
     */
    public function destroy(Course $course)
    {
        $this->course->destroy($course);

        return redirect()->route('admin.course.course.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('course::courses.title.courses')]));
    }
}
