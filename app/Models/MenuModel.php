<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;  

class MenuModel extends Model
{
    use HasFactory;  

    protected $table = 'menu';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 
        'description', 
        'price', 
        'image',
        'status',
    ];
}