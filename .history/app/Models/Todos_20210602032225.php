<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Todos extends Model
{
    use Has
    protected $guarded = array('id');
    public static $rules = array(
        'content' => 'required'
    );
    public function todos(){
        return $this->hasOne('App\Models\Todos');
    }
}
