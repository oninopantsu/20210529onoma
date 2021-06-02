<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Testing\Fluent\Concerns\Has;

class Todos extends Model
{
    use HasFactory;
    protected $guarded = array('id');
    public static $rules = array(
        'content' => 'required'
        'time' => 'required'
    );
    public function todos(){
        return $this->hasOne('App\Models\Todos');
    }
    public function getData()
    {
        $content = $this->id.$this->created_at.$this->content;
        return $content;
    }

}
