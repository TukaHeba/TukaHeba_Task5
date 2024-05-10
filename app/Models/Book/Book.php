<?php

namespace App\Models\Book;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
  use HasFactory, SoftDeletes;

  protected $fillable = [
    'title',
    'author',
    'publisher',
    'price',
    'main_classification_id',
    'sub_classification_id',
    'favorite_id',
    'rate_id',
    'review_id'
  ];
  
  public function mainClassification()
  {
    return $this->belongsTo(MainClassification::class);
  }
  public function subClassification()
  {
    return $this->belongsTo(SubClassification::class);
  }
  public function favorites()
  {
    return $this->hasMany(Favorite::class);
  }

  public function rates()
  {
    return $this->hasMany(Rate::class);
  }
  public function reviews()
  {
    return $this->hasMany(Review::class);
  }
  public function users()
  {
    return $this->belongsToMany(User::class, 'user_books');
  }
}
