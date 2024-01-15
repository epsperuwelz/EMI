<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table="messages";
    protected $primaryKey="id";
    
    protected $fillable=['code','description','enabled','ticket_id'];

    protected $dates=['created_at','updated_at'];

    protected $with=['tickets'];

    public function tickets(){
        return $this->belongsTo(Ticket::class,'ticket_id');
    }
}
