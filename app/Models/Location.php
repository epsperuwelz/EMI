<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table="locations";
    protected $primaryKey="id";

    protected $fillable = [
        'name',
        'description',
        'plan',
        'photo',
        'enabled'  
    ];

    protected $date = [
        'created_at',
        'updated_at'
      ];

    protected $with = ['materials'];

    //Pour la relation one to many entre locations et materials:
    public function materials(){
        return $this->hasMany(Material::class);
    }
}
