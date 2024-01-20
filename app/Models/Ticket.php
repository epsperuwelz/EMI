<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table="tickets";
    protected $primaryKey="id";
    
    protected $fillable=['cost','description','urgency','enabled','material_id'];

    protected $dates=['created_at','updated_at'];

   // protected $with=['materials','statuts','users'];
    protected $with=['materials'];

    public function materials(){
        return $this->belongsTo(Material::class,'material_id');
    }

    // public function messages(){
    //     return $this->hasMany(Message::class);
    // }

    //RELATIONSHIP WITH PIVOT TABLE:
    public function statuts()
    {
        return $this->belongsToMany(Statut::class)->withTimestamps();
    }

    //RELATIONSHIP WITH PIVOT TABLE:
    public function users()
    {
        return $this->belongsToMany(User::class)
            ->withTimestamps()
            ->withPivot(['message']);
    }
}
