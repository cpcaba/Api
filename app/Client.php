<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Client extends Model
{
    use SoftDeletes;
    protected $fillable= ['name','lname','sector','email'];

    public function computer()
    {
      return $this->hasMany('App\Computer');
    }

    public function monitor(){
      return $this->hasMany('App\Monitor');
    }
    protected $dates=['deleted_at'];
  }
