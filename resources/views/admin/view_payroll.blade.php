@extends('layouts.master')
@section('content')

    <h1></h1>
    <table border="1">
        <tr>
            <th>Employee Name</th>
            <th>Salary</th>
            <th>Month</th>
            <th>Working days</th>
            <th>View</th>
            <th>Send</th>
            <th>Save Detail</th>
            <th>Pdf</th>


        </tr>
        @foreach($payroll as $payroll)
            <tr>

                <td>{{$payroll->Employeename}}</td>
                <td>{{$payroll->Basicsalary}}</td>
                <td>{{$payroll->Selectmonth}}</td>
                <td>{{$payroll->Enterworkingdays}}</td>
                <td><a href="{{url('admin/payroll/'.$payroll->id)}}"><button type="button">View</button> </a></td>

                <td><a href="{{url('admin/pdf/'.$payroll->id)}}"><button type="button">Pdf</button> </a></td>

                @endforeach
                    </form>
            </tr>
    </table>
@endsection