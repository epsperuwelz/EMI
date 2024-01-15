<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    use HasFactory;

    protected $table="fonctions";
    protected $primaryKey="id";

    protected $fillable = [
        'name',
        'description',
        'enabled'
    ];

    protected $date = [
        'created_at',
        'updated_at'
      ];

    protected $with = ['participants'];

    //Pour la relation one to many entre fonctions et participants 
    public function participants(){
        return $this->hasMany(Participant::class);
    }
}
