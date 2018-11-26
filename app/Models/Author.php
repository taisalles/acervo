<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\Models\Book;

class Author extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        
    ];

    public function books(): BelongsToMany{
        return $this->belongsToMany(Book::class);
    }
    
}
