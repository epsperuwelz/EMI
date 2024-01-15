<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statut extends Model
{
    use HasFactory;

    protected $table="statuts";
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

    //protected $with = ["tickets"];

    //Pour la pivot table entre tickets et statuts:
    public function tickets()
    {
        return $this->belongsToMany(Ticket::class)->withTimestamps();
    }
}
