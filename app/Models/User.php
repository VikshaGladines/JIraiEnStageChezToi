<?php

namespace App\Models;

use App\Models\Comment;
use App\Models\demande;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use HasFactory, Notifiable;

    const USER_ROLE = 'USER';
    const ADMIN_ROLE = 'ADMIN';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role','avatar','level','city','description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function demande()
    {
        return $this->hasMany(demande::class);
    }
}
