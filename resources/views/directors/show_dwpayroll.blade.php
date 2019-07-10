<style type="text/css">
    table td, table th{
        border:1px solid black;
    }
</style>

<div class="container">
    <h2>Employee Salary Details</h2>
    <table>
        <tr>
            <th>Employee Name</th>
            <th>Month</th>
            <th>BasicSalary</th>
            <th>No of leaves</th>
            <th>Total working days</th>

        </tr>
        @foreach($payroll as $payroll)
            <tr>
                <td>{{$payroll->Employeename}}</td>
                <td>{{$payroll->Selectmonth}}</td>
                <td>{{$payroll->Basicsalary}}</td>
                <td>{{$payroll->count}}</td>
                <td>{{$payroll->Enterworkingdays}}</td>
            </tr>
        @endforeach
    </table>
</div>