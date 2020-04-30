<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class secteur extends Model
{
    //

    protected $table='secteur';
    protected $primaryKey='idSecteur';


    public function responsables(){
        return $this->hasManyThrough(
            'App\Responsable',
            'App\Ville',
            idSecteur, //FK on Ville
            idVille, //FK on Responsable
            idSecteur, //PK on Secteur
            idVille //PK on Ville

        );
    }


    public function users(){
        return $this->hasManyThrough(
            'App\User',
            'App\Ville',
            idSecteur,  //FK on Ville
            idVille,  //Fk on User
            idSecteur, //PK on Secteur
            idVille  //PK on Ville

        );
    }

    public function clients(){
        return $this->hasManyThrough(
            'App\Client',
            'App\Ville',
            idSecteur,//FK on Ville
            idVille, //FK on Clients
            idSecteur, //PK on Secteur
            idVille //PK on Ville
        );
    }
}
