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
                'area' => 'tokyo',
                'genre' => 'sushi',
                'image_path' => '/images/sushi.jpg',
            ],
            [
                'name' => '牛助',
                'area' => 'osaka',
                'genre' => 'yakiniku',
                'image_path' => '/images/yakiniku.jpg',
            ],
            [
                'name' => '戦栗',
                'area' => 'hukuoka',
                'genre' => 'izakaya',
                'image_path' => '/images/izakaya.jpg',
            ],
            [
                'name' => 'ルーク',
                'area' => 'tokyo',
                'genre' => 'italian',
                'image_path' => '/images/italian.jpg',
            ],
            [
                'name' => '志摩屋',
                'area' => 'hukuoka',
                'genre' => 'ramen',
                'image_path' => '/images/ramen.jpg',
            ],
            [
                'name' => '香',
                'area' => 'tokyo',
                'genre' => 'yakiniku',
                'image_path' => '/images/yakiniku.jpg',
            ],
            [
                'name' => 'JJ',
                'area' => 'osaka',
                'genre' => 'italian',
                'image_path' => '/images/italian.jpg',
            ],
            [
                'name' => 'らーめん極み',
                'area' => 'tokyo',
                'genre' => 'ramen',
                'image_path' => '/images/ramen.jpg',
            ],
        ]);
    }
}
