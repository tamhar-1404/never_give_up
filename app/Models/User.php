<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{

    protected $guarded = [];

    use HasApiTokens, HasFactory, Notifiable;
    
     public function postingan() 
    {
        return $this-> HasMany(postingan::class);
    }
    public function kategori()
    {
        return $this-> BelongsTo(kategori::class);
    }
    public function notif()
    {
        return $this-> HasMany(notif::class);
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'foto',
        'namalengkap',
        'notlp',
        'medsos',
        'tgllahir',
        'askot',

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
    ];
   
    protected $table = 'users';

}
