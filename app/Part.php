<?php

namespace App;

use Illuminate\Database\Eloquent\Model; 

class Part extends Model
{
    //
    public $incrementing = false;
    protected $primaryKey = 'code';
}
