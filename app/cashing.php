<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cashing extends Model
{
  protected $fillable = ['user_id','method',
  'formbank',
  'fromAccountNumber',
'fromAccountName',
'transferDate',
'transferTime',
'amount',
'toBank',
'toAccountNumber',
'toAccountName',
'transferStatus'];
  public function user()
  {
    return $this->belongsTo(User::class , 'user_id');
  }

}
