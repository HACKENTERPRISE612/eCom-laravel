<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'name' => 'Oppo mobile',
                'price' => '300',
                'category' => 'mobile',
                'description' => 'A smartphone with 8GB RAM  and much more features',
                'gallery' => 'https://www.lg.com/us/images/cell-phones/md07000523/gallery/desktop-01.jpg'
        
            ],
            [
                'name' => 'Mi TV',
                'price' => '500',
                'category' => 'tv',
                'description' => 'A smart tv with 2GB RAM, 16GB Storage and much more features',
                'gallery' => 'https://i01.appmifile.com/v1/MI_18455B3E4DA706226CF7535A58E875F0267/pms_1587896173.03128019.png'
        
            ],
            [
                'name' => 'Sony TV',
                'price' => '400',
                'category' => 'tv',
                'description' => 'A smart tv with much more features',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/71fe4Tfn5vL._SL1500_.jpg'
        
            ],
            [
                'name' => 'LG Refrigerator',
                'price' => '799',
                'category' => 'Refrigerator',
                'description' => 'A Refrigerator with more awesome features',
                'gallery' => 'https://images-na.ssl-images-amazon.com/images/I/51AzdcoMY%2BL._SX569_.jpg'
        
            ]
            
        ]);
    }
}
