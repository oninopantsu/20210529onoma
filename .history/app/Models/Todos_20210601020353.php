<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todos extends Model
{
    protected $guarded = array('id');
    public static $rules = array(
        'content' => 'required'
    );
    public function todos(){
        return $this->hasOne('App\Models\Todos');
    }
    const CREATED_AT = 'update_datetime';
    const UPDATED_AT = 'upd_datetime';
}
