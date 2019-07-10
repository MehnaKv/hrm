@extends('layout.master')
@section('content')

    <h1></h1>
    <table border="1">
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

                <td>@if($detail->Status==0)Rejected
                    @elseif($detail->Status==1)Approved
                    @endif</td>
            </tr>

        @endforeach


    </table>
@endsection