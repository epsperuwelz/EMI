<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
//Ajouts:
use Spatie\Permission\Traits\HasRoles;
use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;

//AJOUT implements FilamentUser pour que la méthodecanAccessPanel() fonctionne!!!!!!!!!!
class User extends Authenticatable implements FilamentUser
{
    //Pour Spatie ajout de HasRoles:
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    protected $with = ['materials'];

    //Pour la relation one to many entre users et participants 
    // public function participants(){
    //     return $this->hasMany(Participant::class);
    // }

      //RELATIONSHIP WITH PIVOT TABLE:
    public function tickets()
    {
        return $this->belongsToMany(Ticket::class)
            ->withTimestamps()
            ->withPivot(['message']);
    }

    //Pour la relation one to many entre users et materials
    public function materials(){
        return $this->hasMany(Material::class);
    }

    public function canAccessPanel(Panel $panel): bool
    {
        if(($panel->getId() === 'admin' && $this->hasRole('Admin')) || ($panel->getId() === 'admin' && $this->hasRole('Gestionnaire')))
        {
            return true;
        }
        if(($panel->getId() === 'home' && $this->hasRole('Professeur')) || ($panel->getId() === 'home' && $this->hasRole('Intervenant')))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
