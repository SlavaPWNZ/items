<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $table = 'items';
    public $timestamps = false;
    protected $fillable = ['position', 'title', 'value'];
    protected $hidden =  ['id'];
}
