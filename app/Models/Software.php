<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    use HasFactory;
    
    protected $table="softwares";
    protected $primaryKey="id";

    protected $fillable = [
        'name',
        'description',
        'maker_url',
        'icon',
        'enabled',
        'type_id',
        'version_id'
    ];

    protected $date = [
        'created_at',
        'updated_at'
    ];

    //La propriété $with est utilisée pour spécifier les relations
    //qui doivent être chargées automatiquement(= eager loading <> lazy loading):
    protected $with = ['versions','types'];

    public function types(){
        return $this->belongsTo(Type::class);
    }

    public function versions(){
        return $this->belongsTo(Version::class);
    }
}