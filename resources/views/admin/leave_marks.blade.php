@extends('layouts.master')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">LEAVE MARKS</h3>
        </div>
    </div>
    <form action="{{url('admin/emp')}}" method="post">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        {{csrf_field()}}


        Select Month:<br>
        <select name="selectmonth" id="select">
            <option value="not select">--select--</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>\
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select>
        @if ($errors->has('select'))
            <span class="help-block">
                <strong>{{ $errors->first('select') }}</strong>
            </span>
        @endif
        <br>
            Enter Working Days:<br>
            <input type="text" name="enterworkingdays" value="{{ old('enterworkingdays') }}" ><br>
            @if ($errors->has('enterworkingdays'))
                <span class="help-block">
                <strong>{{ $errors->first('enterworkingdays') }}</strong>
            </span>
            @endif

           Employee Name:<br>
            <select class="form-control" id="name" name="employeename">
                <option value="Select employee">---Select Employee---</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->Employeename}}</option>
                @endforeach
            </select>
            Date:<br>
            <input type="text" name="date" value="{{ old('date') }}" ><br>
            @if ($errors->has('date'))
                <span class="help-block">
                <strong>{{ $errors->first('date') }}</strong>
            </span>
            @endif

            Check In:<br>
            <input type="text" name="checkin" value="{{ old('checkin') }}" ><br>
            @if ($errors->has('checkin'))
                <span class="help-block">
                <strong>{{ $errors->first('checkin') }}</strong>
            </span>
            @endif
            Check Out:<br>
            <input type="text" name="checkout" value="{{ old('checkout') }}" ><br>
            @if ($errors->has('checkout'))
                <span class="help-block">
                <strong>{{ $errors->first('checkout') }}</strong>
            </span>
            @endif
            <br>
            Leave:<br>
            <input type="radio" name="leave" value="fullday">Full Day<br>
            <input type="radio" name="leave" value="halfday">Half Day<br>

            <br>
        <input type="submit" value="Submit">
    </form>
@endsection