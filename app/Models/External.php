<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class External extends Model
{
    use HasFactory;

    protected $table="externals";
    protected $primaryKey="id";

    protected $fillable = [
        'name',
        'phone',
        'email',
        'enabled',
        
    ];

    protected $date = [
        'created_at',
        'updated_at'
      ];

    protected $with = ['participants'];

    //Pour la relation one to many entre externals et participants 
    public function participants(){
        return $this->hasMany(Participant::class);
    }
}

