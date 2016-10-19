<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Monitor extends Model
{
  use SoftDeletes;
  protected $fillable= ['size','code','output','client_id'];

  public function client()
  {
    return $this->belongTo('App\Client');
  }
  protected $dates=['deleted_at'];
}
