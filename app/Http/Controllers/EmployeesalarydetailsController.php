<?php

namespace App\Http\Controllers;
use App\HRMmanagement;
use App\Leavedetails;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class EmployeesalarydetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail=DB::table('h_r_mmanagements')
->leftJoin('leavedetails', 'leavedetails.empid', '=', 'h_r_mmanagements.id')
->select('h_r_mmanagements.id','h_r_mmanagements.Employeename','h_r_mmanagements.Totalsalary','h_r_mmanagements.Totalsalary','leavedetails.Selectmonth','leavedetails.Enterworkingdays', DB::Raw('count(leavedetails.empid) as count'))

->groupBy('h_r_mmanagements.id','h_r_mmanagements.Email_id','h_r_mmanagements.Employeename','h_r_mmanagements.Accountno','h_r_mmanagements.Totalsalary','leavedetails.Selectmonth','leavedetails.Enterworkingdays')
->get();
return view('user.salary_details')->with('detail',$detail);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        //
    }
}
