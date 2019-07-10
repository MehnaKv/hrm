@extends('layouts.master')
@section('content')
    <form action="{{url('payroll.show',$payroll->id)}}"method="post">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        {{csrf_field()}}
        <div class="col-md-6">
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Payroll</h3>

                    <div class="box-tools pull-right">

                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">



                        <div class="col-md-6"> Employee Name:
                            {{$payroll->Employeename}}</div>
                        <div class="col-md-6"> Basic Salary:
                            {{$payroll->Basicsalary}}</div>
                        <div class="col-md-6"> Select Month:
                            {{$payroll->Selectmonth}}</div>
                        <div class="col-md-6"> Enter Working Days:
                            {{$payroll->Enterworkingdays}}</div>



                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </form>
@endsection