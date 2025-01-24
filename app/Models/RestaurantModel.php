<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantModel extends Model
{
    protected $table = 'user_mast';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'dob',
        'status'
    ];
    
    use HasFactory;
}