<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = "materials";
    protected $primaryKey = "id";

    protected $fillable = [
        'code',
        'name',
        'description',
        'purchase_date',
        'purchase_price',
        'enabled',
        'imageUrl',
        'category_id',
        'user_id',
        'supplier_id',
        'location_id',
        'brand_id',
    ];
    
    protected $date = [
        'created_at',
        'updated_at',
    ];

    // protected $with = [
    //     'categories',
    //     'users',
    //     'suppliers',
    //     'locations',
    //     'brands',
    //     'tickets',
    //     'material_state',
    // ];

    /* ACCESSOR */ 
    public function getResourceUrlAttribute()
    {
        return url('/admin/materials/'.$this->getKey());
    }

    //relation avec la table categories
    public function categories()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    //relation avec la table users
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    //relation avec la table suppliers
    public function suppliers()
    {
        return $this->belongsTo(Supplier::class,'supplier_id');
    }

    //relation avec la table locations
    public function locations()
    {
        return $this->belongsTo(location::class,'location_id');
    }

    //relation avec la table brands
    public function brands()
    {
        return $this->belongsTo(Brand::class,'brand_id');
    }

    //relation avec la table tickets
    public function tickets(){
        return $this->hasMany(Ticket::class);
    }

    //RELATIONSHIP WITH PIVOT TABLE:
    public function states()
    {
        return $this->belongsToMany(State::class)->withTimestamps();
    }

}
