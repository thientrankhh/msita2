<?php

namespace Modules\Course\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Course\Entities\Schedule;
use Modules\Course\Http\Requests\CreateScheduleRequest;
use Modules\Course\Http\Requests\UpdateScheduleRequest;
use Modules\Course\Repositories\ScheduleRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class ScheduleController extends AdminBaseController
{
    /**
     * @var ScheduleRepository
     */
    private $schedule;

    public function __construct(ScheduleRepository $schedule)
    {
        parent::__construct();

        $this->schedule = $schedule;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$schedules = $this->schedule->all();

        return view('course::admin.schedules.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('course::admin.schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateScheduleRequest $request
     * @return Response
     */
    public function store(CreateScheduleRequest $request)
    {
        $this->schedule->create($request->all());

        return redirect()->route('admin.course.schedule.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('course::schedules.title.schedules')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Schedule $schedule
     * @return Response
     */
    public function edit(Schedule $schedule)
    {
        return view('course::admin.schedules.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Schedule $schedule
     * @param  UpdateScheduleRequest $request
     * @return Response
     */
    public function update(Schedule $schedule, UpdateScheduleRequest $request)
    {
        $this->schedule->update($schedule, $request->all());

        return redirect()->route('admin.course.schedule.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('course::schedules.title.schedules')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Schedule $schedule
     * @return Response
     */
    public function destroy(Schedule $schedule)
    {
        $this->schedule->destroy($schedule);

        return redirect()->route('admin.course.schedule.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('course::schedules.title.schedules')]));
    }
}
