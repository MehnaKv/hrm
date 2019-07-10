<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Leavedetails;
use App\HRMmanagement;
use PDF;
use phpDB;
class AdmindownloadpayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payroll=DB::table('h_r_mmanagements')
            ->leftJoin('leavedetails', 'leavedetails.empid', '=', 'h_r_mmanagements.id')
            ->select('h_r_mmanagements.Employeename','h_r_mmanagements.Basicsalary','leavedetails.Selectmonth','leavedetails.Enterworkingdays', DB::Raw('count(leavedetails.empid) as count'))
            ->groupBy('h_r_mmanagements.Employeename','h_r_mmanagements.Basicsalary','leavedetails.Selectmonth','leavedetails.Enterworkingdays')
            ->get();
        $pdf = PDF::loadView('admin.show_dwpayroll', compact('payroll'));

        return $pdf->stream('Salary Details.pdf');

        return view('admin.download_payroll')->with('payroll',$payroll);

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
        $payroll=Leavedetails::select('leavedetails.*','h_r_mmanagements.Employeename','h_r_mmanagements.Basicsalary')
            ->join('h_r_mmanagements','leavedetails.empid','=','h_r_mmanagements.id')
            ->where('leavedetails.empid','=',$id)
            ->get();
        return $payroll;
        $pdf = PDF::loadView('admin.download_payroll', compact('payroll'));

        return $pdf->stream('Salary Details.pdf');
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
