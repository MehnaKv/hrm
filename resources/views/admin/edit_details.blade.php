@extends('layouts.master')
@section('content')
    <form action="{{url('admin.employ',$detail->id)}}" method="post">
        @if(Session::has('message'))
            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        {{method_field('PUT')}}
        {{csrf_field()}}


            Employee Name:<br>
        <input type="text" name="employeename" value="{{$detail->Employeename}}" >
        <br>
            Designation:<br>
        <input type="text" name="designation" value="{{$detail->Designation}}"><br><br>
            Email_id:
            <input type="email" name="email_id" value="{{$detail-> Email_id}}"><br><br>
           Contact No:<br>
            <input type="number" name="contactno" value="{{$detail->Contactno}}"><br><br>

        <input type="submit" value="Edit">
    </form>
@endsection