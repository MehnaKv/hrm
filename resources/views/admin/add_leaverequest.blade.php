@extends('layouts.master')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">Add Employee Details</div>
    </div>
    <form action="{{url('admin/employ')}}" method="post">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        {{csrf_field()}}
        <div>
            Employee Name:
            <input type="text" name="employeename" required value="{{ old('employeename') }}" ><br>
            @if ($errors->has('employeename'))
                <span class="help-block">
                    <strong>{{ $errors->first('employeename') }}</strong>
                </span>
            @endif
            <br>
        </div>
            Department:
        <input type="text" name="department" value="{{ old('department') }}" required><br>
        @if ($errors->has('department'))
            <span class="help-block">
                  <strong>{{ $errors->first('department') }}</strong>
                </span>
        @endif
        <br>
        Reason:
        <input type="text" name="reason" value="{{ old('reason') }}"  required><br>
        @if ($errors->has('reason'))
            <span class="help-block">
                    <strong>{{ $errors->first('reason') }}</strong>
                </span>
        @endif
        <br>


        Date:
        <input type="text" name="date" value="{{ old('date') }}" required><br>
        @if ($errors->has('date'))
            <span class="help-block">
                    <strong>{{ $errors->first('date') }}</strong>
                </span>
        @endif
        <br>
       Duration:
        <input type="text" name="duration" value="{{ old('duration') }}"required ><br>
        @if ($errors->has('duration'))
            <span class="help-block">
                    <strong>{{ $errors->first('duration') }}</strong>
                </span>
        @endif
        <br>
            <td><a href="{{url('admin/emp',$detail->id)}}"><button type="button">Accept</button> </a></td>
            <td><a href="{{url('admin/emp',$detail->id)}}"><button type="button">Decline</button> </a></td>
    </form>
@endsection