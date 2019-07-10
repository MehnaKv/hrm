@extends('layout.master')
@section('content')

    <h1></h1>
    <table border="1">
        <tr>
            <th>Employee Name</th>
            <th>Basic Salary</th>
            <th>Select Month</th>
            <th>Enter working days</th>
            <th>View</th>
            <th>Pdf</th>




        </tr>
        @foreach($payroll as $payroll)
            <tr>

                <td>{{$payroll->Employeename}}</td>
                <td>{{$payroll->Basicsalary}}</td>
                <td>{{$payroll->Selectmonth}}</td>
                <td>{{$payroll->Enterworkingdays}}</td>
                <td><a href="{{url('directors/pay/'.$payroll->id)}}"><button type="button">View</button> </a></td>
                <td><a href="{{url('directors/pdf/'.$payroll->id)}}"><button type="button">Pdf</button> </a></td>

                @endforeach

            </tr>
    </table>
@endsection