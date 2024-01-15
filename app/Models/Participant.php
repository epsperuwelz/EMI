<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $table = "participants";
    protected $primaryKey = "id";

    protected $fillable = [
        'external_id',
        'user_id',
        'fonction_id',
        'ticket_id',
    ];
    
    protected $date = [
        'created_at',
        'updated_at'
    ];

    protected $with = [
        'externals',
        'users',
        'fonctions',
        'tickets',
    ];


    /* ACCESSOR */ 

    public function getResourceUrlAttribute()
    {
        return url('/admin/participants/'.$this->getKey());
    }

    //relation avec la table externals
    public function externals()
    {
        return $this->belongsTo(External::class,'external_id');
    }

    //relation avec la table users
    public function users()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    
    //relation avec la table fonctions
    public function fonctions()
    {
        return $this->belongsTo(Fonction::class,'fonction_id');//mettre en français sinon bug
    }

    //relation avec la table tickets
    public function tickets()
    {
        return $this->belongsTo(Ticket::class,'ticket_id');
    }
}
