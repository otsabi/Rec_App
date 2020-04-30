<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class docDetail extends Model
{
    //
    public function paiements(){
        return $this->hasMany('APP\Paiement');
    }
}
