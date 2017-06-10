@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <h1>Cashing</h1>
      <table class="table table-bordered">
        <tr>
          <th>Id</th>
        {{--    <th>user_id</th>--}}
          <th>method</th>
          <th>formbank</th>
          <th>fromAccountNumber</th>
          <th>fromAccountName</th>
          <th>transferDate</th>
          <th>transferTime</th>
          <th>amount</th>
          <th>toBank</th>
          <th>toAccountNumber</th>
          <th>toAccountName</th>
          <th>transferStatus</th>
          <th>ปุ่ม</th>
        </tr>
        <a href="cashing/create" type="text" class="btn btn-lg btn-primary">ADD</a href="/">

        @foreach ($cashings as $cash)
                <tr>
                  <td>{{$cash->id}}</td>
                {{--  <td>{{$cash->user_id}}</td>--}}
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
                    <form  action="/cashing/{{$cashing->id}}" method="post">
                      <input type="hidden" name="_token" value="{{ csrf_token()}}">
                      <input type="hidden" name="_method" value="DELETE">
                        <a href="/cashing/{{ $cash->id}}/edit" type="Text" class="btn btn-default">Edit</a>
                        <button type="submit" class="btn btn-denger">Delete</button>
                      </form>
                  </td>
                </tr>
          @endforeach
      </table>
    </div>
</div>
@endsection
