<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class client extends Model
{
    //

    protected $table='client';
    protected $primaryKey='idClient';

    public function ville(){
        return $this->belongsTo('App\Ville','idVille');
    }

    public function docdetails(){
        return $this->hasMany('APP\DocDetail');
    }

    public function responsables(){
        return $this->belongsTo('App\Responsable','idResponsable');
    }
}
