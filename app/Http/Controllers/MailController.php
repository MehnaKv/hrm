<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LeaveMail;
use Session;
use Auth;
use DB;


class MailController extends Controller
{

    //Employee view - when employee sends the mail , the message is simultaneously sent to mail and saved in the database.

    public function send(Request $request)
    {
        Mail::send(new LeaveMail());
        return redirect('user/leave/create');
    }}
        //$userId = Auth::User()->emp_id;
        //$details= DB::table('users')
           // ->join('employee_details', 'users.empid', '=', 'employee_details.emp_no')
           // ->select('add_employees.emp_name','add_employees.dept')
          //  ->where('users.emp_id',$userId)
           // ->get();

        //foreach($details as $detail){
           // $Create = new LeaveRequest;
            //$Create->emp_id= $userId;
           // $Create->emp_name=Auth::User()->name;
          //  $Create->dept= $detail->dept;
            //$Create->reason= $request->type;
           // $Create->date= $request->date;
            //$Create->duration=$request->duration;
            //$Create->save();
       // }

      //  Session::flash('message', 'Leave Application Sent Successfully!');
       // Session::flash('alert-class', 'alert-success');
       // return view('email')->with('users',$userId)->with('details',$details);
//    }


    //public function email(){
       // return view('email');
  //  }



