<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * ユーザー一覧ページを表示
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request): \Illuminate\View\View
    {
        $data = $this->userService->read($request->all());
        return view('users.index', $data);
    }
}
