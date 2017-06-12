@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <h1>Cashing</h1>
      <table class="table table-bordered">
        <tr>
          <th>รหัส</th>
          <th>ชื่อผู้กรอกข้อมูล</th>
          <th>วิธีการโอน</th>
          <th>โอนจากธนาคาร</th>
          <th>โอนจากเลขบัญชี</th>
          <th>โอนจากชื่อบัญชี</th>
          <th>วันที่โอน</th>
          <th>เวลาโอน</th>
          <th>จำนวนเงิน</th>
          <th>โอนเข้าธนาคาร</th>
          <th>โอนเข้าเลขบัญชี</th>
          <th>โอนเข้าชื่อบัญชี</th>
          <th>สถานะโอน</th>
          <th>ปุ่ม</th>
        </tr>
        <a href="cashing/create" type="text" class="btn btn-lg btn-primary">ADD</a href="/">

        @foreach ($cashings as $cash)
                <tr>
                  <td>{{$cash->id}}</td>
             <td>{{$cash->user->name}}</td>


                  <td>{{$cash->method}}</td>
                  <td>{{$cash->formbank}}</td>
                  <td>{{$cash->fromAccountNumber}}</td>
                  <td>{{$cash->fromAccountName}}</td>
                  <td>{{$cash->transferDate}}</td>
                  <td>{{$cash->transferTime}}</td>
                  <td>{{$cash->amount}}</td>
                  <td>{{$cash->toBank}}</td>
                  <td>{{$cash->toAccountNumber}}</td>
                  <td>{{$cash->toAccountName}}</td>
                  <td>{{$cash->transferStatus}}</td>
                  <td></td>
                  <td>
                    <form method="post" action="/cashing/{{ $cash->id}}">
                      <input name="_token" type="hidden" value="{{ csrf_token() }}">
                      <input name="_method" type="hidden" value="DELETE">
                        <a href="/cashing/{{ $cash->id}}/edit" type="Text" class="btn btn-default">Edit</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                      </form>
                  </td>
                </tr>
          @endforeach
      </table>
    </div>
</div>
@endsection
