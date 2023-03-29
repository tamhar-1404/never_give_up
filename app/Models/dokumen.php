<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokumen extends Model
{
    use HasFactory;
    protected $fillable = [
        'postingan_id',
        'dokumen',

    ];

    public function postingan()
    {
        return $this-> BelongsTo(postingan::class);
    }
}
