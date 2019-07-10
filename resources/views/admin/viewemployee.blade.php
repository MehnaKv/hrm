@extends('layouts.master')
@section('content')

    <h1></h1>
    <table border="1">
        <tr>

            <th>Employee Name</th>
            <th>Designation</th>
            <th>Email_id</th>
            <th>Contact No</th>
            <th>View</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        @foreach($details as $detail)
            <tr>

                <td>{{$detail->Employeename}}</td>
                <td>{{$detail->Designation}}</td>
                <td>{{$detail->Email_id}}</td>
                <td>{{$detail->Contactno}}</td>
                <td><a href="{{url('admin/employ/'.$detail->id)}}"><button type="button">View</button> </a></td>
                <td><a href="{{url('admin/employ/',$detail->id.'/edit')}}"><button type="button">Edit</button> </a></td>

                <td><form method="post" action="/admin/employ/{{$detail->id}}">
                        {{method_field('Delete')}}
                        {{csrf_field()}}
                        <button onclick="return confirm ('are you sure to delete')" type="submit">DELETE</button>


        @endforeach
                    </form>

    </table>
    </div>
    <!-- /.box-body -->
    </div> <!-- /.box -->
@endsection