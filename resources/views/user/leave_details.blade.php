@extends('layoutss.master')
@section('content')

    <h1></h1>
    <table border="1">
        <tr>

            <th>Date</th>
            <th>Employeename</th>
            <th>Checkin</th>
            <th>Checkout</th>


        </tr>
        @foreach($detail as $detail)
            <tr>

                <td>{{$detail->Date}}</td>
                <td>{{$detail->Employeename}}</td>
                <td>{{$detail->Checkin}}</td>
                <td>{{$detail->Checkout}}</td>


                </form>
            </tr>
        @endforeach


    </table>
@endsection