<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Computer extends Model
{
  use SoftDeletes;
  protected $fillable= ['code','specification','ip','lastcheck','client_id'];

  public function client()
  {
    return $this->belongTo('App\Client');
  }
  protected $dates=['deleted_at'];
}
