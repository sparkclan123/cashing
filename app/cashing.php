<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cashing extends Model
{
  protected $fillable = ['method',
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
}
