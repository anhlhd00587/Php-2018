<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('products')->truncate();
        \Illuminate\Support\Facades\DB::table('products')->insert([
            [
                'name'=>'Kính đi biển',
                'image'=>'http://giupbanmuasam.net/wp-content/uploads/2018/04/kinh-nu-di-bien1.jpg',
                'price'=>1000000,
                'sale'=>100000,
                'description'=>'Kính đẹp',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Áo chuối đi biển',
                'image'=>'https://img.zanado.com/media/catalog/product/cache/all/thumbnail/360x420/7b8fef0172c2eb72dd8fd366c999954c/3/_/ao_so_mi_nam_nu_hoa_tiet_chuoi_sanh_dieu_4032.jpg',
                'price'=>100000,
                'sale'=>1000,
                'description'=>'Áo đẹp',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Mũ đi biển',
                'image'=>'https://tea-2.lozi.vn/v1/images/resized/mu-coi-di-bien-1485758495-1-2126564-1490251276?w=480&type=s',
                'price'=>50000,
                'sale'=>5000,
                'description'=>'Mũ đẹp',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ],
            [
                'name'=>'Dép đi biển',
                'image'=>'http://product.hstatic.net/1000171212/product/dl09.jpg',
                'price'=>30000,
                'sale'=>3000,
                'description'=>'Dép đẹp',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
