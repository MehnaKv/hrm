@extends('layoutss.master')
@section('content')
    <form action="{{url('user/send')}}" method="post">
        {{csrf_field()}}
        <div class="col-sm-8 text-left">
            <div class="panel panel-default">
                <div class="panel-body" >

                    <h4 id="head-style">Leave Application</h4><hr>
                    <div class="col-sm-3 text-left">

                        <div class="form-group">
                            <input type="date" name="date" class="form-control" ><br>
                        </div>

                        <div class="dropdown">
                            <select class="form-control" name="type" id="leave-type">
                                <option selected="selected">--Select Leave Type--</option>
                                <option value="casual">Casual Leave</option>
                                <option value="sick">Sick Leave</option>
                                <option value="loss">Loss of Leave</option>
                                <option value="earned">Earned Leave</option>
                                <option value="half">Half Day</option><br>
                            </select>
                        </div>

                        to: <input type="text" name="to">

                        <div class="form-group">
                            <textarea class="form-control" name="msg" rows="5" id="reason" placeholder="Reason for Leave"></textarea>
                        </div>

                        <div class="checkbox">
                            <label><input type="checkbox" value="">Send a copy to e-mail</label>
                        </div>

                        <p><center><button type="submit" value="send" class="btn btn-success" id="leave-btn" >Send</button></center></p>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection