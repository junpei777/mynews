<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
  protected $guarded = array('id');
  
  public static $rules = array(
        'title' => 'required',
        'body' => 'required',
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
     public function histories()
    {
      return $this->hasMany('App\History2s');
    }
}
