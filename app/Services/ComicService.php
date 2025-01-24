<?php

namespace App\Services;

use App\Models\Comic;
use App\Models\User;

class ComicService implements ServiceInterface
{
    /**
     * 指定されたユーザーのコミック一覧を取得
     *
     * @param array $params
     * @return array
     */
    public function facadeService(array $params): array
    {
        $userId = $params['user_id'] ?? null;
        if (!$userId) {
            return ['error' => 'ユーザーIDが指定されていません。'];
        }

        // スコープで取得
        $data = Comic::byUserId($userId)->get();

        //リレーションで取得
//        $data = User::with('comics')->find($userId)->comics;

        return [
            'comics' => $data->toArray()
        ];
    }
}
