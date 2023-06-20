<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // particular name 
        // DB::table('product')->insert([
        //     'product_name'=>'xyz',
        //     'product_type'=>'zyx',
        //     'product_link'=>'hhtps://google.com'
        // ]);

       // random
        //   DB::table('product')->insert([
        //     'product_name'=>Str::random(10),
        //     'product_type'=>Str::random(10),
        //     'product_link'=>Str::random(20)
        // ]);

        // php artisan db:seed --class=seederfilename (indiviual )

        //multiple record by seeder
    //     foreach(range(1,10) as $item){
    // DB::table('product')->insert([
    //         'product_name'=>Str::random(10),
    //         'product_type'=>Str::random(10),
    //         'product_link'=>Str::random(20)
    //     ]);
    // }

    //faker ya factory
    $faker=Faker::create();
    foreach(range(1,10) as $item){
        DB::table('product')->insert([
                'product_name'=>$faker->name(),
                'product_type'=>$faker->creditCardType(),
                'product_link'=>$faker->url()
            ]);
        }
    }
}
