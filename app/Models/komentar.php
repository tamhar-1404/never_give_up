<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komentar extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='komentar';
    public function user()
    {
        return $this-> BelongsTo(user::class);
    }
    public function postingan()
    {
        return $this-> BelongsTo(postingan::class);
    }

}
