<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use App\User;
use App\Models\Author;

class Book extends Model
{
    protected $fillable = [
        'title',
        'publisher',
        'ed',
        'country',
        'isbn',
        'pages'
    ];

    public function users(): BelongsToMany{
        return $this->belongsToMany('App\User','users_books');
    }
    
    public function desejos(): BelongsToMany{
        return $this->belongsToMany('App\User','desired');
    }
    
    public function authors(): BelongsToMany{
        return $this->belongsToMany('App\Models\Author','books_authors');
    }
    
}

