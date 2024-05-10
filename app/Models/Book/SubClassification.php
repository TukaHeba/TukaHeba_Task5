<?php

namespace App\Models\Book;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubClassification extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'main_classification_id'
    ];

    public function mainClassification()
    {
        return $this->belongsTo(MainClassification::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
