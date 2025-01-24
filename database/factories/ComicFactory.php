<?php

namespace Database\Factories;

use App\Models\Comic;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComicFactory extends Factory
{
    protected $model = Comic::class;

    public function definition():array
    {
        $titles = [
            'ONE PIECE',
            'NARUTO',
            'BLEACH',
            '鬼滅の刃',
            '東京喰種',
            'ジョジョの奇妙な冒険 Part1',
            'ジョジョの奇妙な冒険 Part2',
            'ジョジョの奇妙な冒険 Part3',
            'ジョジョの奇妙な冒険 Part4',
            'ジョジョの奇妙な冒険 Part5',
        ];

        return [
            'title' => $this->faker->randomElement($titles),
            'author' => '集英社',
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory(),
        ];
    }
}
