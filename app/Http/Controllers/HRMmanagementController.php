<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HRMmanagement;
use App\User;
use Session;
use Illuminate\Support\Facades\App;
use DB;

class HRMmanagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details= HRMmanagement::all();
        return view('admin.viewemployee')->with('details',$details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee_details');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
//        $this->validate($request, [
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

        $user=new User();
        $user->name=$request->employeename;
        $user->email=$request->email_id;
        $user->password=bcrypt($request->password);
        $user->role=3;
        $user->save();

        $store = new HRMmanagement();
        $store->id=$user->id;
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


        DB::commit();
        Session::flash('message', 'Record added successfully!');
        Session::flash('alert-class', 'alert success');
       return view('admin.employee_details');

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
        return view('admin.show_details')->with('detail',$detail);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $detail=HRMmanagement::FindOrFail($id);
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
        $update=HRMmanagement::FindOrFail($id);
        $update->Employeename=$request->employeename;
        $update->Designation=$request->designation;
        $update->Email_id=$request->email_id;
        $update->Contactno=$request->contactno;
        $update->$update();
        return redirect('admin/employ');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detail=HRMmanagement::FindOrFail($id);
        $detail->delete();
        return redirect("admin/employ");
    }
}
