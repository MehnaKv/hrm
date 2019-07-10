@extends('layouts.master')
@section('content')
        <div class="box box-info">
          <div class="box-header with-border">Add Employee Details</div>
        </div>
     <form action="{{url('admin/employ')}}" method="post">
            @if(Session::has('message'))
              <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
             {{csrf_field()}}
<div>
        Employee Name:
          <input type="text" name="employeename" required value="{{ old('employeename') }}" ><br>
            @if ($errors->has('employeename'))
                <span class="help-block">
                    <strong>{{ $errors->first('employeename') }}</strong>
                </span>
            @endif
                <br>
</div>
        Designation:
          <input type="text" name="designation" required value="{{ old('designation') }}" ><br>
            @if ($errors->has('designation'))
                <span class="help-block">
                    <strong>{{ $errors->first('designation') }}</strong>
                </span>
            @endif
                    <br>
        Department:
             <input type="text" name="department" value="{{ old('department') }}" required><br>
             @if ($errors->has('department'))
                <span class="help-block">
                  <strong>{{ $errors->first('department') }}</strong>
                </span>
             @endif
                    <br>
             Email_id:
            <input type="text" name="email_id" value="{{ old('email_id') }}"  required><br>
            @if ($errors->has('email_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('email_id') }}</strong>
                </span>
            @endif
                    <br>
                Password:
                <input type="password" name="password" value="{{ old('password') }}"  required><br>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                <br>

                Account No:
                <input type="text" name="accountno" value="{{ old('accountno') }}" required><br>
            @if ($errors->has('accountno'))
                <span class="help-block">
                    <strong>{{ $errors->first('accountno') }}</strong>
                </span>
            @endif
                    <br>
            Address:
                <input type="text" name="address" value="{{ old('address') }}"required ><br>
            @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
                <br>
            Contact No:
                <input type="number" name="contactno" value="{{ old('contactno') }}" required ><br>
            @if ($errors->has('contactno'))
                <span class="help-block">
                    <strong>{{ $errors->first('contactno') }}</strong>
                </span>
            @endif
                <br>
            Emergency Contact:
                <input type="text" name="emergencycontact" value="{{ old('emergencycontact') }}" required><br>
            @if ($errors->has('emergencycontact'))
                <span class="help-block">
                   <strong>{{ $errors->first('emergencycontact') }}</strong>
                </span>
            @endif
                <br>

            Proof:
                <input type="text" name="proof" value="{{ old('proof') }}" required><br>
                @if ($errors->has('proof'))
                    <span class="help-block">
                    <strong>{{ $errors->first('proof') }}</strong>
                </span>
                @endif
                <br>


           Basic Salary:
                <input type="text" name="basicsalary" value="{{ old('basicsalary') }}" id="ba" required><br>
            @if ($errors->has('basicsalary'))
                <span class="help-block">
                    <strong>{{ $errors->first('basicsalary') }}</strong>
                </span>
            @endif
                <br>

                Dearaness Allowance:
                <input type="text" name="dearanessallowance" value="{{ old('dearanessallowance') }}" id="da" required ><br>
            @if ($errors->has('dearanessallowance'))
                <span class="help-block">
                    <strong>{{ $errors->first('dearanessallowance') }}</strong>
                </span>
            @endif
                <br>
            Special Allowance:
                <input type="text" name="specialallowance" value="{{ old('specialallowance') }}" id="sa" required ><br>
            @if ($errors->has('specialallowance'))
                <span class="help-block">
                    <strong>{{ $errors->first('specialallowance') }}</strong>
                </span>
            @endif
                <br>
                Conveyance Allowance:
                <input type="text" name="conveyanceallowance" value="{{ old('conveyanceallowance') }}" id="ca" required ><br>
            @if ($errors->has('conveyanceallowance'))
                <span class="help-block">
                    <strong>{{ $errors->first('conveyanceallowance') }}</strong>
                </span>
            @endif
                <br>
            Medical Allowance:
                 <input type="text" name="medicalallowance" value="{{ old('medicalallowance') }}" id="ma" required ><br>
            @if ($errors->has('medicalallowance'))
                <span class="help-block">
                    <strong>{{ $errors->first('medicalallowance') }}</strong>
                </span>
            @endif
                <br>
           Total Salary:
                <input type="text" name="totalsalary" readonly onclick="doMath()" value="{{ old('totalsalary') }}" id="total" required><br>
            @if ($errors->has('totalsalary'))
                <span class="help-block">
                    <strong>{{ $errors->first('totalsalary') }}</strong>
                </span>
            @endif
                <br>

                 <input type="submit" value="Submit">
    </form>

@endsection