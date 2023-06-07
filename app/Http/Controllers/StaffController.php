<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index()
    {
        //abort_if(Gate::denies('staff_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$staffs = Staff::with(['clinic'])->get();

        //return view('staffs.index', compact('staffs'));
        return view('staffs.index');
    }

    public function create()
    {
        //abort_if(Gate::denies('staff_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$clinics = Clinic::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        //return view('staffs.create', compact('clinics'));
        return view('staffs.create');
    }

    public function store(Request $request)
    {
		dd($request);
        /* $staff = Staff::create($request->all());

        return redirect()->route('staffs.index'); */
    }

    public function edit(Request $request)
    {
        //abort_if(Gate::denies('staff_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        /* $clinics = Clinic::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $staff->load('clinic'); */

        //return view('staffs.edit', compact('clinics', 'staff'));
        return view('staffs.edit');
    }

    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        $staff->update($request->all());

        return redirect()->route('staffs.index');
    }

    public function show(Request $request)
    {
        //abort_if(Gate::denies('staff_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

       // $staff->load('clinic');

        //return view('staffs.show', compact('staff'));
        return view('staffs.show');
    }

    public function destroy(Request $request)
    {
        //abort_if(Gate::denies('staff_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        //$staff->delete();

        return back();
    }
}
