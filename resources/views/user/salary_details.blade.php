@extends('layoutss.master')
@section('content')

    <h1></h1>
    <table border="1">
        <tr>

            <th>Total Salary</th>
            <th>Select Month</th>
            <th>Enter Working Days</th>
            <th>Employee Name</th>


        </tr>
        @foreach($detail as $detail)
            <tr>

                <td>{{$detail->Totalsalary}}</td>
                <td>{{$detail->Selectmonth}}</td>
                <td>{{$detail->Enterworkingdays}}</td>
                <td>{{$detail->Employeename}}</td>


                </form>
            </tr>
        @endforeach


    </table>
@endsection