<?php

namespace App\Services\Interfaces;

interface UpdateInterface
{
    /**
     * サービスのファサードメソッド
     *
     * @param array $params
     * @return array
     */
    public function update(array $params): array;
}
