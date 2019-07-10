@extends('layoutss.master')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Leave Details</h3>
        </div>
    </div>
    <h1></h1>
    <table border="1">
        <tr>

            <th>From</th>
            <th>To</th>
            <th>Reason</th>
            <th>Status</th>

        </tr>
        @foreach($detail as $detail)
            <tr>

                <td>{{$detail->From}}</td>
                <td>{{$detail->To}}</td>
                <td>{{$detail->Reason}}</td>

                <td>@if($detail->Status==0)Rejected
                    @elseif($detail->Status==1)Approved
                    @endif</td>


        @endforeach


    </table>
@endsection