@extends('layouts.master')
@section('content')
    <form action="{{route('emp.show',$detail->id)}}"method="post">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif

        {{csrf_field()}}
        <div class="col-md-6">
            <div class="box box-success box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">LEAVE DETAILS</h3>

                    <div class="box-tools pull-right">

                        <!-- /.box-tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="col-md-6">Date:
                            {{$detail->Date}}</div>

                        <div class="col-md-6"> Employee Name:
                            {{$detail->Employeename}}</div>
                        <div class="col-md-6"> Check In:
                            {{$detail->Checkin}}</div>
                        <div class="col-md-6"> Check Out:
                            {{$detail->Checkout}}</div>


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        </div>
    </form>
@endsection