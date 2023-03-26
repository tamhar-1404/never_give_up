<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class multi_img extends Model
{
    use HasFactory;
    protected $table = 'multi_imgs';
    protected $fillable = ['postingan_id', 'gambar'];
    public function postingan()
    {
        return $this-> BelongsTo(postingan::class);
    }
}
