<?php

namespace App\Models\Traits\Relations;

use App\Models\Comic;

trait UserRelations
{
    public function comics()
    {
        return $this->hasMany(Comic::class);
    }
}
