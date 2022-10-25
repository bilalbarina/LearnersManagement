<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table = 'promotions';

    protected $fillable = [
        'title',
        'token',
    ];

    public $timestamps = true;

    public function students()
    {
        return $this->hasMany(Student::class, 'promotion_token', 'token');
    }

    public function studentsCount()
    {
        return count($this->students()->get());
    }
}
