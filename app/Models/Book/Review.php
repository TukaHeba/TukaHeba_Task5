<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User; 
class Review extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'review',
        'book_id',
        'user_id',
    ];
    public function book()
    {
      return $this->belongsTo(Book::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}