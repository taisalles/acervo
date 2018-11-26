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
        return $this->belongsToMany(User::class,'users_books','book_id','user_id')->withPivot(['see','want']);
    }
    
    public function authors(): BelongsToMany{
        return $this->belongsToMany(Author::class);
    }
    
}

