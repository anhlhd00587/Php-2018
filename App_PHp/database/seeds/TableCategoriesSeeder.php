p<?php

use Illuminate\Database\Seeder;

class TableCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            [
                'id'=>1,
                'name'=>'Thời trang đi biển',
                'description'=>'Quần áo đi biển đẹp',
                'image'=>'https://img.zanado.com/media/catalog/product/cache/all/thumbnail/360x420/7b8fef0172c2eb72dd8fd366c999954c/3/_/ao_so_mi_nam_nu_hoa_tiet_chuoi_sanh_dieu_4032.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>2,
                'name'=>'Đồ bơi nam',
                'description'=>'Quần bơi nam',
                'image'=>'https://lh3.googleusercontent.com/-ZwSYRiqUD74/V4hrNYnrbHI/AAAAAAAABk8/27LtQ4OQegIHMaDzzWiWKfmZ1-17r-YvwCCo/s800/quan-short-nam-di-boi%2B%25281%2529.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>3,
                'name'=>'Đồ bơi nữ',
                'description'=>'Quần áo bơi nữ',
                'image'=>'https://doboinu.info/wp-content/uploads/2017/06/z640504347069_b7730c1a50b6e48a6c1eb1bde6928c8e.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>4,
                'name'=>'Kính râm',
                'description'=>'Kính mát',
                'image'=>'https://vn-test-11.slatic.net/p/6/basto-bs102-kinh-ram-can-the-thao-den-do-9186-665742-f53087e6742c5529f2566812fd943248-catalog.jpg_340x340q80.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>5,
                'name'=>'Dép đi biển',
                'description'=>'Dép đi biển đẹp',
                'image'=>'http://product.hstatic.net/1000171212/product/dl09.jpg',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ],
            [
                'id'=>6,
                'name'=>'Kem chống nắng',
                'description'=>'Kem chống nắng tốt',
                'image'=>'http://mathoadaphan.com/wp-content/uploads/2017/06/179.png',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s'),
                'status'=>1
            ]
        ]);

    }
}
