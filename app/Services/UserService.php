<?php

namespace App\Services;

use App\Models\User;

class UserService implements ServiceInterface
{
    /**
     * ユーザー一覧を取得
     *
     * @param array $params
     * @return array
     */
    public function facadeService(array $params): array
    {
        $users = User::all();

        return [
            'users' => $users->toArray()
        ];
    }
}
