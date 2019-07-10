@extends('layout.master')
@section('content')
    <form action="{{route('dir.show',$detail->id)}}"method="post">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        {{csrf_field()}}
        <div class="col-md-6">
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Employee Details</h3>

                    <div class="box-tools pull-right">

                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="col-md-6">Employee Name:
                            {{$detail->Employeename}}</div>

                        <div class="col-md-6"> Designation:
                            {{$detail->Designation}}</div>
                        <div class="col-md-6"> Department:
                            {{$detail->Department}}</div>
                        <div class="col-md-6"> Email_id:
                            {{$detail->Email_id}}</div>
                        <div class="col-md-6"> Account No:
                            {{$detail->Accountno}}</div>
                        <div class="col-md-6"> Address:
                            {{$detail->Address}}</div>
                        <div class="col-md-6">Contact No:
                            {{$detail->Contactno}}</div>
                        <div class="col-md-6"> Emergency Contact:
                            {{$detail->Emergencycontact}}</div>
                        <div class="col-md-6">  Proof:
                            {{$detail-> Proof}}</div>
                        <div class="col-md-6"> Basic Salary:
                            {{$detail->Basicsalary}}</div>
                        <div class="col-md-6">Dearaness Allowance:
                            {{$detail->Dearanessallowance}}</div>
                        <div class="col-md-6">Special Allowance:
                            {{$detail->Specialallowance}}</div>
                        <div class="col-md-6">Conveyance Allowance:
                            {{$detail->Conveyanceallowance}}</div>
                        <div class="col-md-6"> Medical Allowance:
                            {{$detail-> Medicalallowance}}</div>
                        <div class="col-md-6"> Total Salary:
                            {{$detail-> Totalsalary}}</div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </form>

@endsection