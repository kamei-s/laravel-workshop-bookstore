<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Relations\ComicRelations;
use App\Models\Traits\Scopes\ComicScopes;

class Comic extends Model
{
    use HasFactory, ComicRelations, ComicScopes;

    protected $fillable = ['title', 'author', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
