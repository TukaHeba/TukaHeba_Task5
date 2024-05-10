<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainClassification extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function subClassifications(){
        return $this->hasMany(SubClassification::class, 'main_classification_id');
    }
    
    public function books()
{
    return $this->hasMany(Book::class);
}

}
