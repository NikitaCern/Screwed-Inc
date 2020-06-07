<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function order() { // FK relationship
        return $this->belongsTo('App\Order');
    }
    public function part() { // FK relationship
        return $this->belongsTo('App\Part');
    }
    public function responsible_employee() { // FK relationship
        return $this->belongsTo('App\User');
    }
}
