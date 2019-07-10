@extends('layout.master')
@section('content')

    <html>

    <head>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>

    <h2></h2>

    <table>
        <tr>

            <th>Employee Name</th>
            <th>Month</th>
            <th>BasicSalary</th>
            <th>No of leaves</th>
            <th>Total working days</th>


        </tr>
        <a href="{{url('admin/download_payroll/')}}"><button type="button">DOWNLOAD PDF</button></a>
        @foreach($payroll as $payroll)
            <tr>

                <td>{{$payroll->Employeename}}</td>
                <td>{{$payroll->Selectmonth}}</td>
                <td>{{$payroll->Basicsalary}}</td>
                <td>{{$payroll->count}}</td>
                <td>{{$payroll->Enterworkingdays}}</td>
                </form>
                </td>

            </tr>

        @endforeach
    </table>


    </body>
    </html>
@endsection