<?php

namespace App\modele;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['titre', 'anneeSortie', 'description', 'idCategorie'];

    public function categorie() {
        return $this->belongsTo('App\modele\Categorie', 'idCategorie');
    }
}
