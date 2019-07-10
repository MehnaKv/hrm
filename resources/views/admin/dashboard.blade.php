@extends('layouts.master')
@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Leave Request</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
            <table class="table table-condensed">
                <tr>
                    <th>From</th>
                    <th>To</th>
                    <th>Employee Name</th>
                </tr>
                @foreach($detail as $detail)
                       <tr>
                            <td>{{$detail->From}}</td>
                            <td>{{$detail->To}}</td>
                            <td>{{$detail->Employeename}}</td>
                       </tr>
                    @endforeach
                    </form>
                    </tr>
            </table>
        </div>
        <!-- /.box-body -->
    </div> <!-- /.box -->
@endsection