<?php

namespace App\Services\Interfaces;

interface DeleteInterface
{
    /**
     * サービスのファサードメソッド
     *
     * @param array $params
     * @return array
     */
    public function delete(array $params): array;
}
