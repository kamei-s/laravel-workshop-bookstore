<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;
use App\Models\User;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // 10件のコミックをランダムに作成（ユーザーも自動作成）
        Comic::factory()->count(10)->create();

        // 既存のユーザーに対してコミックを作成
        User::all()->each(function ($user) {
            Comic::factory()->count(3)->create(['user_id' => $user->id]);
        });
    }
}
