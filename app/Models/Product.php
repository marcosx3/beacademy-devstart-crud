<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable  = [
        'name',
        'gender',
        'developer',
        'distributor',
        'launch',
        'so',
        'processor',
        'memory_ram',
        'storage_req',
        'video_card',
        'created_at',
        'updated_at'
    ];
}
