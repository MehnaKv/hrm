<?php

namespace App\Http\Controllers;


use App\HRMmanagement;
use Illuminate\Http\Request;
use App\Leavedetails;
use Session;
use Illuminate\Support\Facades\App;
class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail= Leavedetails::get();
        return view('admin.view_leave_details')->with('detail',$detail);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=HRMmanagement::all();
        return view('admin.leave_marks')->with('users',$users);
       // return view('admin.leave_marks');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

$employeename=HRMmanagement::where('id','=',$request->employeename)->value('employeename');
        $store = new Leavedetails();
        $store->Selectmonth = $request->selectmonth;
        $store->Enterworkingdays = $request->enterworkingdays;
        $store->Employeename= $employeename;
        $store->empid= $request->employeename;
        $store->Date = $request->date;
        $store->Checkin= $request->checkin;
        $store->Checkout= $request->checkout;
        $store->Leave= $request->leave;
        $store->save();
        return redirect('admin/emp/create');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail=Leavedetails::FindOrFail($id);
        return view('admin.show_leavedetails')->with('detail',$detail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail=Leavedetails::FindOrFail($id);
        return view('admin.edit_details')->with('detail',$detail);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail=Leavedetails::FindOrFail($id);
        $detail->delete();
        return redirect("admin/emp");
    }
}
