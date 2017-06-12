@extends('layouts.app')

@section('content')
  <script type="text/javascript">
$(function(){
  $("#transferDate").datetimepicker({
    altField: "#transferTime",
  dateFormat: 'yy-mm-dd',
  timeFormat: "HH:mm"
  });
});
</script>


<div class="container">
    <div class="row">
        <h1>แก้ไขข้อมูล</h1>
<form action="/cashing/{{$cashing->id}}" method="post">
   {{ csrf_field() }}
        <div class="form-group">
            <label for="title">เลือกวิธีการโอน</label>
              <select class="form-control" type="text"  name="method" id="method" value="{{$cashing->method}}" >
                  <option>กรุณาเลือก</option>
                  <option>ATM</option>
                  <option>Internet Banking</option>
                  <option>Bank</option>
                </select>
        </div>

        <div class="form-group">
          <label for="title">เลือกธนาคาร</label>
            <select class="form-control" type="text"  name="formbank" id="formbank" value="{{$cashing->formbank}}">
                <option>กรุณาเลือก</option>
                <option>SCB</option>
                <option>TMB</option>
                <option>KTB</option>
            </select>
          </div>


        <div class="form-group">
    <label for="fromAccountNumber">เลขบัญชีธนาคาร</label>
    <input type="text" class="form-control" name="fromAccountNumber" id="fromAccountNumber" placeholder="fromAccountNumber" value="{{$cashing->fromAccountNumber}}">
        </div>

        <div class="form-group">
    <label for="fromAccountName">ชื่อบัญชีธนาคาร</label>
    <input type="text" class="form-control" name="fromAccountName" id="fromAccountName" placeholder="fromAccountName" value="{{$cashing->fromAccountName}}">
        </div>

        <div class="form-group">
          <label for="fromAccountName">วันที่โอนเงิน::: </label>
    <input type="text" name="transferDate" id="transferDate" value="{{$cashing->transferDate}}" />
      </div>

         <div class="form-group">
           <label for="fromAccountName">เวลาที่โอนเงิน:::</label>
      <input type="text" name="transferTime" id="transferTime" value="{{$cashing->transferTime}}" />
        </div>

        <div class="form-group">
    <label for="amount">จำนวนเงินที่โอน</label>
    <input type="text" class="form-control" name="amount" id="amount" placeholder="amount" value="{{$cashing->amount}}">
        </div>

        <div class="form-group">
          <label for="title">เลือกธนาคาร</label>
            <select class="form-control" type="text"  name="toBank" id="toBank" value="{{$cashing->toBank}}">
                <option>กรุณาเลือก</option>
                <option>SCB</option>
                <option>TMB</option>
                <option>KTB</option>
            </select>
          </div>

        <div class="form-group">
    <label for="toAccountNumber">โอนไปบัญชี</label>
    <input type="text" class="form-control" name="toAccountNumber" id="toAccountNumber" placeholder="toAccountNumber" value="{{$cashing->toAccountNumber}}">
        </div>

        <div class="form-group">
    <label for="toAccountName">ชื่อบัญชีปลายทาง</label>
    <input type="text" class="form-control" name="toAccountName" id="toAccountName" placeholder="toAccountName" value="{{$cashing->toAccountName}}">
        </div>

        <div class="form-group">
          <label for="title">เลือกสถานะ</label>
            <select class="form-control" type="text"  name="transferStatus" id="transferStatus" >
                <option>กรุณาเลือก</option>
                <option>waiting</option>
                <option>approved</option>
                <option>rejected</option>
            </select>
          </div>

<center><button type="submit" class="btn btn-primary">บันทึกข้อมูล</button></center>
</form>
    </div>
</div>
@endsection
