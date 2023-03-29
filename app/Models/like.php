<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table='like';
    protected $fillable = ['user_id', 'postingan_id'];
    public $timestamps = false;

    public function postingan()
    {
        return $this->belongsTo(postingan::class);
    }

    public function user()
    {
        return $this->belongsTo(user::class);
    }}
