<?php

namespace App\Models;
use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'username',
        'email',
        'last_name',
        'first_name',
        
    ];

    public function books(){
        return $this->belongsToMany(Book::class, 'book_student');
    }

}
