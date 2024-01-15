<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $table="types";
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

    protected $with = ['softwares'];

    //Pour la relation one to many entre types et softwares
    public function softwares(){
        return $this->hasMany(Software::class);
    }
}
