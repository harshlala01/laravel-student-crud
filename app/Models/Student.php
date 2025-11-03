<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Student extends Model
// {
//     use HasFactory;

//     protected $fillable = ['name', 'email', 'phone'];
// }


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'class_id'];

    // har student ek class se belong karta hai
    public function schoolClass()
    {
        return $this->belongsTo(schoolClass::class, 'class_id');
    }
}

