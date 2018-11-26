<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\User;
use App\Models\Book;

class Author extends Model
{
    protected $fillable = [
        'name',   
    ];

    public function books(): BelongsToMany{
        return $this->belongsToMany('App\Models\Book','books_authors');
    }
    
}
