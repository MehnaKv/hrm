<?php

namespace App\Http\Controllers;
use App\HRMmanagement;
use App\Leaveapplication;
use Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class LeaverequsetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail=HRMmanagement::select('h_r_mmanagements.Employeename','h_r_mmanagements.Department','leaveapplications.*')
            ->join('leaveapplications','h_r_mmanagements.id','=','leaveapplications.empid')->get();


        return view('admin.leave_request')->with('detail',$detail);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function updateStatus(Request $request, $id)
    {

    $Create= Leaveapplication::where('id',$id)
            ->update(['status'=>$request['status']]);

        Session::flash('message', 'Leave Application Verified Successfully!');//To display the alert message
        Session::flash('alert-class', 'alert-success');
        return redirect('admin/request');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
