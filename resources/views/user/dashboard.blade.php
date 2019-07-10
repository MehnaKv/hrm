@extends('layoutss.master')
@section('content')
    <form method="post">
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

                        <div class="col-md-6">Employeename:
                            {{$detail->Employeename}}</div>
                        <div class="col-md-6"> Designation:
                            {{$detail->Designation}}</div>
                        <div class="col-md-6"> Department:
                            {{$detail->Department}}</div>
                        <div class="col-md-6"> Email_id:
                            {{$detail->Email_id}}</div>
                        <div class="col-md-6"> Accountno:
                            {{$detail->Accountno}}</div>
                        <div class="col-md-6"> Address:
                            {{$detail->Address}}</div>
                        <div class="col-md-6">Contactno:
                            {{$detail->Contactno}}</div>
                        <div class="col-md-6"> Emergencycontact:
                            {{$detail->Emergencycontact}}</div>
                        <div class="col-md-6">  Proof:
                            {{$detail-> Proof}}</div>
                        <div class="col-md-6"> Basicsalary:
                            {{$detail->Basicsalary}}</div>
                        <div class="col-md-6">Dearanessallowance:
                            {{$detail->Dearanessallowance}}</div>
                        <div class="col-md-6">Specialallowance:
                            {{$detail->Specialallowance}}</div>
                        <div class="col-md-6">Conveyanceallowance:
                            {{$detail->Conveyanceallowance}}</div>
                        <div class="col-md-6"> Medicalallowance:
                            {{$detail-> Medicalallowance}}</div>
                        <div class="col-md-6"> Totalsalary:
                            {{$detail-> Totalsalary}}</div>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </form>

@endsection