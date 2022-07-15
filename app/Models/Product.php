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



    public function getProducts(string $search = null)
    {
        $products = $this->where( function ($query) use ($search){
            if($search)
            {
                $query->where('name','LIKE',"%{$search}%");
                $query->orWhere('gender','LIKE',"%{$search}%");
                $query->orWhere('developer','LIKE',"%{$search}%");
                $query->orWhere('distributor','LIKE',"%{$search}%");
            }
        })
        ->paginate(10);
        return $products;
    }
}
