<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operatingsystem extends Model
{
    use HasFactory;

    protected $table="operatingsystems";
    protected $primaryKey="id";

    protected $fillable = [
        'name',
        'description',
        'enabled',
    ];

    protected $date = [
        'created_at',
        'updated_at'
      ];


    //De ce côté ne provoque pas l'erreur:??
    //protected $with = ['versions'];

    //POUR RELATION AVEC LA PIVOT TABLE!!!
    public function versions()
    {
       return $this->belongsToMany(Version::class);
    }
}
