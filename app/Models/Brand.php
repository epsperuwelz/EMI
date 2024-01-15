<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    
    protected $table="brands";
    protected $primaryKey="id";

    protected $fillable = [
        'name',
        'description',
        'url',
        'enabled'
    ];

    protected $date = [
      'created_at',
      'updated_at'
    ];

    protected $with = ['materials'];

    public function materials(){
        return $this->hasMany(Material::class);
    }
}
