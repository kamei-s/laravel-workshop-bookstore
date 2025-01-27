<?php

namespace App\Services\Interfaces;

interface ReadInterface
{
    /**
     * サービスのファサードメソッド
     *
     * @param array $params
     * @return array
     */
    public function read(array $params): array;
}
