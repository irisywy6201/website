<?php

namespace app\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name'];

    /*
    public function articles(){
        return $this->hasMany('app\Models\Article');
    }
    */
}
