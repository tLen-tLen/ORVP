<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert(
        [
          'name' => 'LG',
          'description' => 'Protection Corning Gorilla Glass 4. MISC Colors Space Black, Luxe White, Modern Beige, Ocean Blue, Opal Blue.',
          'photo' => 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1',
          'price' => 3999.00
        ]);
        
        DB::table('products')->insert(
        [
          'name' => 'iPhone',
          'description' => 'OS iPhone iOS 13, screen: 6.1 ", IPS, 1792 × 828, processor: Apple A13 Bionic, internal memory: 64GB',
          'photo' => 'https://items.s1.citilink.ru/1178737_v01_b.jpg',
          'price' => 5999.00
        ]);
        
        DB::table('products')->insert(
        [
          'name' => 'Honor',
          'description' => 'Android 9 OS, screen: 6.21 ", 2340 × 1080',
          'photo' => 'https://items.s1.citilink.ru/1134243_v01_b.jpg',
          'price' => 1299.00
        ]);
        
        DB::table('products')->insert(
        [
          'name' => 'SAMSUNG',
          'description' => 'RAM: 2GB, ROM: 32GB',
          'photo' => 'https://items.s1.citilink.ru/1139317_v01_b.jpg',
          'price' => 899.00
        ]);
        
        DB::table('products')->insert(
        [
          'name' => 'XIAOMI',
          'description' => 'processor: Qualcomm Snapdragon 660, 2200 MHz',
          'photo' => 'https://items.s1.citilink.ru/1136845_v01_b.jpg',
          'price' => 1199.00
        ]);
        
        DB::table('products')->insert(
        [
          'name' => 'ALCATEL',
          'description' => 'talk time, up to: 25h, standby time, up to: 460h',
          'photo' => 'https://items.s1.citilink.ru/1055158_v01_b.jpg',
          'price' => 730.00
        ]);
    }
}
