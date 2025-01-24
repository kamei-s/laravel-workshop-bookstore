<?php

namespace App\Services;

interface ServiceInterface
{
    /**
     * サービスのファサードメソッド
     *
     * @param array $params
     * @return array
     */
    public function facadeService(array $params): array;
}
