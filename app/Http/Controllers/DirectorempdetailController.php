<?php

namespace App\Http\Controllers;
use App\HRMmanagement;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\App;
class DirectorempdetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detail= HRMmanagement::all();
        return view('directors.employee_details')->with('detail',$detail);
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
        //$this->validate($request, [
//            'Employeename' => 'required',
//            'Designation' => 'required',
//            ' Department' => 'required',
//            'Email_id' => 'required|email_id',

//             'Accountno' => 'required',
//            ' Address' => 'required',
//            ' Contactno' => 'required',
//            'Emergencycontact' => 'required',
//            'Proof' => 'required',
//            'Basicsalary' => 'required',
//            ' Dearanessallowance' => 'required',
//            'Specialallowance' => 'required',
//            ' Conveynceallowance' => 'required',
//            ' Medicalallowance' => 'required',
//            'Totalsalary' => 'required',
//
//        ]);


            $store = new HRMmanagement();
        $store->Employeename = $request->employeename;
        $store->Designation = $request->designation;
        $store->Department = $request->department;
        $store->Email_id= $request->email_id;
        $store->Accountno = $request->accountno;
        $store->Address = $request->address;
        $store->Contactno = $request->contactno;
        $store->Emergencycontact= $request->emergencycontact;
        $store->Proof= $request->proof;
        $store->Basicsalary= $request->basicsalary;
        $store->Dearanessallowance= $request->dearanessallowance;
        $store->Specialallowance= $request->specialallowance;
        $store->Conveyanceallowance= $request->conveyanceallowance;
        $store->Medicalallowance= $request->medicalallowance;
        $store->Totalsalary= $request->totalsalary;
        $store->save();
        Session::flash('message', 'Record added successfully!');
        Session::flash('alert-class', 'alert success');
        return view('directors.employee_details');

//        return $request;

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail=HRMmanagement::FindOrFail($id);
        return view('directors.show_details')->with('detail',$detail);
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
