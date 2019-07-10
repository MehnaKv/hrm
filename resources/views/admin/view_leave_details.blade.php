@extends('layouts.master')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Leave Details</h3>
        </div>
    </div>
    <h1></h1>
    <table border="1">
        <tr>

            <th>Date</th>
            <th>Employee Name</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>View</th>
            <th>Delete</th>

        </tr>
        @foreach($detail as $detail)
            <tr>

                <td>{{$detail->Date}}</td>
                <td>{{$detail->Employeename}}</td>
                <td>{{$detail->Checkin}}</td>
                <td>{{$detail->Checkout}}</td>

                <td><a href="{{url('admin/emp',$detail->id)}}"><button type="button">VIEW</button> </a></td>
                <td><form method="post" action="/admin/emp/{{$detail->id}}">
                        {{method_field('Delete')}}
                        {{csrf_field()}}
                        <button onclick="return confirm ('are you sure to delete')" type="submit">DELETE</button>


                        @endforeach
                    </form>

    </table>
@endsection