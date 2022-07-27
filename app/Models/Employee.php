<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'name',
        'lastname',
        'phone',
        'salary',
    ];

    public function getFullNameAttribute()
    {
        return "{$this->name} {$this->lastname}";
    }

    //RELACION DE UNO A UNO CON USUARIO
    public function user()
    {
        return $this->hasOne(User::class);
    }


}



