<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        // 10件のユーザーデータを作成
        User::factory()->count(20)->create();
    }
}
