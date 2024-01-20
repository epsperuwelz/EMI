<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table="categories";
    protected $primaryKey="id";
    
    protected $fillable = [
        'name',
        'icon',
        'enabled',
        'topcategory_id'  
    ];

    protected $date = [
        'created_at',
        'updated_at'
      ];

    //Pour l'auto-jointure:
    public function topcategory()
    {
        return $this->belongsTo(Category::class, 'topcategory_id');
    }

    //Pour le Select dans le form de création de catégories:
    public function categorie()
    {
        //Solution pour n'avoir que les top categories dans le select: il fallait mettre NULL TOUT SIMPLEMENT COMME EN DB !!!!!!!
        return $this->belongsTo(Category::class,'topcategory_id')->where('topcategory_id',NULL);
    }

    //Pour la relation one to many entre categories et materials:
    public function materials(){
        return $this->hasMany(Material::class);
    }

}
