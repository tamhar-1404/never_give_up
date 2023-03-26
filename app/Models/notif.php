<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notif extends Model
{

    use HasFactory;
    protected $guarded = [];
    public function postingan() 
    {
        return $this-> HasMany(postingan::class);
    }
    public function user() 
    {
        return $this-> BelongsTo(user::class);
    }
}
