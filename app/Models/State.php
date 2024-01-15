<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table="states";
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

    //protected $with = ['materials'];

    //Pour la pivot table entre states et materials:
    public function materials()
    {
        return $this->belongsToMany(Material::class)->withTimestamps();
    }

}
