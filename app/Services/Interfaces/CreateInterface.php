<?php

namespace App\Services\Interfaces;

interface CreateInterface
{
    /**
     * サービスのファサードメソッド
     *
     * @param array $params
     * @return array
     */
    public function create(array $params): array;
}
