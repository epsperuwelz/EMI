<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $table="versions";
    protected $primaryKey="id";

    protected $fillable = [
        'name',
        'description',
        'url',
        'release',
        'enabled',
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];

    //provoque l'erreur:Xdebug has detected a possible infinite loop, and aborted your script with a stack depth of '256' frames
    //protected $with = ['operatingsystems'];
    protected $with = ['softwares'];
    
    //POUR RELATION AVEC LA PIVOT TABLE!!!
    public function operatingsystems()
    {
        return $this->belongsToMany(Operatingsystem::class);
    }

    //Pour la relation one to many entre versions et softwares
    public function softwares(){
        return $this->hasMany(Software::class);
    }
}
