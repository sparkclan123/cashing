<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cashing;
class CashingController extends Controller
{


  public function index()
  {
      $cashings = cashing::paginate(5);


      return view('cash.cashindex', compact('cashings'));

  }

public function create()
{
  return view('cash.create');
}

public function store(Request $request)
{

cashing::create([
'method'=>$request->method,
'formbank'=>$request->formbank,
'fromAccountNumber'=>$request->fromAccountNumber,
'fromAccountName'=>$request->fromAccountName,
'transferDate'=>$request->transferDate,
'transferTime'=>$request->transferTime,
'amount'=>$request->amount,
'toBank'=>$request->toBank,
'toAccountNumber'=>$request->toAccountNumber,
'toAccountName'=>$request->toAccountName


  ]);
  return redirect('cashing');
  }

public function edit($id)
  {
    $cashing = cashing::find($id);
      return view('cash.edit', compact('cashing'));

  }


public function update(Request $request, $id )
  {
    $cashing = cashing::find($id);
    $cashing->update([
      'method'=>$request->method,
      'formbank'=>$request->formbank,
      'fromAccountNumber'=>$request->fromAccountNumber,
      'fromAccountName'=>$request->fromAccountName,
      'transferDate'=>$request->transferDate,
      'transferTime'=>$request->transferTime,
      'amount'=>$request->amount,
      'toBank'=>$request->toBank,
      'toAccountNumber'=>$request->toAccountNumber,
      'toAccountName'=>$request->toAccountName


    ]);
    return redirect('cashing');
  }
public function destroy($id)
{
  $cashing = cashing::find($id);
    $cashing->delete();
    return redirect('cashing');
}


}
