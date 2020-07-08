<?php

namespace Modules\Course\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Course\Entities\Register;
use Modules\Course\Http\Requests\CreateRegisterRequest;
use Modules\Course\Http\Requests\UpdateRegisterRequest;
use Modules\Course\Repositories\RegisterRepository;
use Modules\Core\Http\Controllers\Admin\AdminBaseController;

class RegisterController extends AdminBaseController
{
    /**
     * @var RegisterRepository
     */
    private $register;

    public function __construct(RegisterRepository $register)
    {
        parent::__construct();

        $this->register = $register;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$registers = $this->register->all();

        return view('course::admin.registers.index', compact(''));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('course::admin.registers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateRegisterRequest $request
     * @return Response
     */
    public function store(CreateRegisterRequest $request)
    {
        $this->register->create($request->all());

        return redirect()->route('admin.course.register.index')
            ->withSuccess(trans('core::core.messages.resource created', ['name' => trans('course::registers.title.registers')]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Register $register
     * @return Response
     */
    public function edit(Register $register)
    {
        return view('course::admin.registers.edit', compact('register'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Register $register
     * @param  UpdateRegisterRequest $request
     * @return Response
     */
    public function update(Register $register, UpdateRegisterRequest $request)
    {
        $this->register->update($register, $request->all());

        return redirect()->route('admin.course.register.index')
            ->withSuccess(trans('core::core.messages.resource updated', ['name' => trans('course::registers.title.registers')]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Register $register
     * @return Response
     */
    public function destroy(Register $register)
    {
        $this->register->destroy($register);

        return redirect()->route('admin.course.register.index')
            ->withSuccess(trans('core::core.messages.resource deleted', ['name' => trans('course::registers.title.registers')]));
    }
}
