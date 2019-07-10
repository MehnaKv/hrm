@extends('layouts.master')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Leave Request</h3>
        </div>
        <!-- /.box-header -->

        <!-- form start -->
        <form action="{{url('admin/request')}}" method="post">
            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
            {{csrf_field()}}

            <div class="box-body no-padding">
                <table class="table table-condensed">
                    <tr>

                        <th>Employee Name</th>
                        <th>Department</th>
                        <th>Reason</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Status</th>


                    </tr>
                    @foreach($detail as $detail)
                        <tr>

                            <td>{{$detail->Employeename}}</td>
                            <td>{{$detail->Department}}</td>
                            <td>{{$detail->Reason}}</td>
                            <td>{{$detail->From}}</td>
                            <td>{{$detail->To}}</td>
                            <td><form class="form-horizontal" action="{{url('admin/leave_update/'.$detail->id)}}"  method="POST">
                                    {{csrf_field()}}
                                    <input class="radio-inline" value="1" type="radio" name="status">Accept
                                    <input  class="radio-inline" value="0" type="radio" name="status">Reject

                                    <button type="submit" class="btn btn-primary">SAVE</button>

                                </form>
                            </td>

                        </tr>
                    @endforeach
                </table>
            </div>
            <!-- /.box-body -->
    </div>
    <!-- /.box -->

@endsection
