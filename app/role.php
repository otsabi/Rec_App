<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    protected $table='role';
    protected $primaryKey='idRole';

    protected $fillable = ['idRole','libelle'];

    public function users(){
        return $this->hasMany('App\User','idRole');
    }
}
