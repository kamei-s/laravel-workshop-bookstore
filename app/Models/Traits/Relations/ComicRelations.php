<?php

namespace App\Models\Traits\Relations;

use App\Models\User;
use App\Models\Comic;

trait ComicRelations
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
