<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    // pour dire que votre model est associe a une table dans Db qui s'appel groups 
    public $table="groups "
    
    
    // list des etudiants par exemple sera comme suit 
     public function  etudiants(){
        
        return $this>hasMany(Etudiant::class);
        
        
    }
    
    // pour avoir les groups et etudaiants vous aallez juste Faire 
     Groupe::with('etudians ')->get();
    
    // comme ca vous aurez la liste des groupes avec les etudiants dans chaque groupe
}
