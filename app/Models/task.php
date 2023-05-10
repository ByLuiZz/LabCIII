<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    static $rules = [
        'taskname'=> 'require|string|min:3',
        'descripcion'=>'require|string|min:3',
        'fechav'=>'require|date',
    ];
}
