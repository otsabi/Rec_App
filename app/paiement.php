<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class paiement extends Model
{
    //
    public function docdetail(){
        return $this->belongsTo('App\DocDetail','idDocDetail');
    }
}
