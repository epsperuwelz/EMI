<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    
    protected $table="suppliers";
    protected $primaryKey="id";

    protected $fillable = [
        'name',
        'description',
        'contact_name',
        'phone_number',
        'email',
        'url',
        'enabled'
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];

    protected $with =  ['materials'];
            
    //Pour la relation one to many entre materials et suppliers:
    public function materials(){
        return $this->hasMany(Material::class);
    }
}
