<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Teacher extends Model
{
    protected $fillable = [
        'name',
        'email',
        'date_of_birth',
        'phone',
        'gender'
    ];
    use HasFactory;

    public function course(){
        return $this->hasOne(Course::class);
    }
}
