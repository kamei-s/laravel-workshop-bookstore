<?php

namespace App\Models\Traits\Scopes;

trait ComicScopes
{
    /**
     * 指定されたユーザーIDのコミックを取得するスコープ
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param int $userId
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeByUserId($query, int $userId)
    {
        return $query->where('user_id', $userId);
    }
}
