<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartModel extends Model
{
    use HasFactory;

    protected $table = 'cart'; 
    protected $fillable = [
        'item_id',
        'status',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];

    public function menu()
    {
        return $this->belongsTo(MenuModel::class, 'item_id');
    }
}