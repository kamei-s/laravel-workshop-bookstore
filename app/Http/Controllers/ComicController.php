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
    public function index(Request $request, $user): \Illuminate\View\View
    {
        $data = $this->comicService->read(['user_id' => $user]);
        return view('comics.index', $data);
    }

    /**
     * ユーザーごとのコミック一覧を表示
     *
     * @param int $userId
     * @return \Illuminate\View\View
     */
    public function store(Request $request): \Illuminate\View\View
    {
        $data = $this->comicService->read($request->all());
        return view('comics.index', $data);
    }
}
