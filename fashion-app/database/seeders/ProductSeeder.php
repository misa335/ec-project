<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Black T-shirt',
                'category' => 'clothes',
                'description' => 'コットン素材を使用したクルーネックのカットソー',
                'image' => '/images/1.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'White T-shirt',
                'category' => 'clothes',
                'description' => 'コットン素材を使用したクルーネックのカットソー',
                'image' => '/images/2.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'White T-shirt 2',
                'category' => 'clothes',
                'description' => 'コットン素材を使用したクルーネックのカットソー',
                'image' => '/images/3.jpg',
                'price' =>'6800'
            ],
            [
                'name' => 'Black T-shirt Plain',
                'category' => 'clothes',
                'description' => 'コットン素材を使用したクルーネックのカットソー シンプルなデザインで、様々なスタイリングに合わせやすいアイテム',
                'image' => '/images/4.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'Black T-shirt 2',
                'category' => 'clothes',
                'description' => 'コットン素材を使用したクルーネックのカットソー',
                'image' => '/images/5.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'Navy T-shirt',
                'category' => 'clothes',
                'description' => 'コットン素材を使用したクルーネックのカットソー',
                'image' => '/images/6.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'Border T-shirt',
                'category' => 'clothes',
                'description' => 'コットン素材を使用したクルーネックのカットソー',
                'image' => '/images/7.jpg',
                'price' =>'6800'
            ],
            [
                'name' => 'Border Long Sleeve T-shirt',
                'category' => 'clothes',
                'description' => 'コットン素材を使用したクルーネックのカットソー',
                'image' => '/images/8.jpg',
                'price' =>'7800'
            ],
            [
                'name' => 'Gray T-shirt',
                'category' => 'clothes',
                'description' => 'コットン素材を使用したクルーネックのカットソー',
                'image' => '/images/9.jpg',
                'price' =>'4500'
            ],
            [
                'name' => 'COLOR GENERATION',
                'category' => 'cosmetics',
                'description' => '個性派オシャレさんにおすすめのヘアカラー',
                'image' => '/images/10.jpg',
                'price' =>'1600'
            ],
        ]);
    }
}
