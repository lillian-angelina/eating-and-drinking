<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    public function run()
    {
        Restaurant::insert([
            [
                'name' => '仙人',
                'area' => '東京都',
                'genre' => '寿司',
                'image_url' => '/images/sushi.jpg',
            ],
            [
                'name' => '牛助',
                'area' => '大阪府',
                'genre' => '焼肉',
                'image_url' => '/images/yakiniku.jpg',
            ],
            [
                'name' => '戦栗',
                'area' => '福岡県',
                'genre' => '居酒屋',
                'image_url' => '/images/izakaya.jpg',
            ],
            [
                'name' => 'ルーク',
                'area' => '東京都',
                'genre' => 'イタリアン',
                'image_url' => '/images/italian.jpg',
            ],
            [
                'name' => '志摩屋',
                'area' => '福岡県',
                'genre' => 'ラーメン',
                'image_url' => '/images/ramen.jpg',
            ],
            [
                'name' => '香',
                'area' => '東京都',
                'genre' => '焼肉',
                'image_url' => '/images/yakiniku2.jpg',
            ],
            [
                'name' => 'JJ',
                'area' => '大阪府',
                'genre' => 'イタリアン',
                'image_url' => '/images/italian2.jpg',
            ],
            [
                'name' => 'らーめん極み',
                'area' => '東京都',
                'genre' => 'ラーメン',
                'image_url' => '/images/ramen2.jpg',
            ],
        ]);
    }
}
