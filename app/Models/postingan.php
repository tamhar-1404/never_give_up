<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postingan extends Model
{
    protected $guarded = [];
    use HasFactory;
    public function user()
    {
        return $this-> BelongsTo(user::class);
    }
    public function notif()
    {
        return $this-> HasMany(notif::class);
    }
    public function kategori()
    {
        return $this-> BelongsTo(kategori::class);
    }
    public function komentar()
    {
        return $this-> hasMany(komentar::class);
    }
    public function multi_img()
    {
        return $this-> HasMany(multi_img::class);
    }
    public function dokumen()
    {
        return $this-> BelongsTo(dokumen::class);
    }
}
