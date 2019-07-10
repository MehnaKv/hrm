@extends('layout.master')
@section('content')

    <h1></h1>
    <table border="1">
        <tr>

            <th>Employee Name</th>
            <th>Designation</th>
            <th>Email_id</th>
            <th>Contact No</th>
            <th>View</th>

        </tr>
        @foreach($detail as $detail)
            <tr>

                <td>{{$detail->Employeename}}</td>
                <td>{{$detail->Designation}}</td>
                <td>{{$detail->Email_id}}</td>
                <td>{{$detail->Contactno}}</td>
                <td><a href="{{url('directors/dir/'.$detail->id)}}"><button type="button">View</button> </a></td>

            </tr>

                        @endforeach
                    </form>

    </table>
@endsection