<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\ReadInterface;

class UserService implements ReadInterface
{
    /**
     * ユーザー一覧を取得
     *
     * @param array $params
     * @return array
     */
    public function read(array $params): array
    {
        $users = User::all();

        return [
            'users' => $users->toArray()
        ];
    }
}
