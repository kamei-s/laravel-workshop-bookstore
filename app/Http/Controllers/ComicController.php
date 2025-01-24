<?php

namespace App\Http\Controllers;

use App\Services\ComicService;
use Illuminate\Http\Request;

class ComicController
{
    protected $comicService;

    public function __construct(ComicService $comicService)
    {
        $this->comicService = $comicService;
    }

    /**
     * ユーザーごとのコミック一覧を表示
     *
     * @param int $userId
     * @return \Illuminate\View\View
     */
    public function index($userId)
    {
        $data = $this->comicService->facadeService(['user_id' => $userId]);
        return view('comics.index', $data);
    }
}
