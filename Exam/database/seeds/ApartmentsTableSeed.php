<?php

use Illuminate\Database\Seeder;

class ApartmentsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('apartments')->insert([
            [
                'name' => 'Chung cu Linh Dam',
                'address' => '320 Hoang mai',
                'price' => 10000,
                'desciption' => "chat luong tot",
                'url_image' => "http://sanvenus.com/wp-content/uploads/2015/10/chung-cu-hh-linh-dam-bao-hiem-chay-no.jpg",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Chung cu Mi Dinh',
                'address' => '110 My dinh',
                'price' => 11000,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Chung cu Cau Giay',
                'address' => '38 Dich Vong Hau',
                'price' => 12000,
                'desciption' => "Moi xay",
                'url_image' => "http://i.imgur.com/WqgfKfT.jpg",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Chung cu Giat bat',
                'address' => '28 Giai Phong',
                'price' => 13000,
                'desciption' => "gan ben xe",
                'url_image' => "http://4.bp.blogspot.com/-PPZ8y0R6Er4/U7-E5YVt3dI/AAAAAAAAAgQ/NJ5GVcMM9vA/s1600/chung+c%C6%B0+gi%C3%A1+r%E1%BA%BB+C%E1%BA%A7u+Gi%E1%BA%A5y+H%C3%A0+N%E1%BB%99i.jpg",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Chung cu Ha Dong',
                'address' => '56 To Huu',
                'price' => 14000,
                'desciption' => "view dep",
                'url_image' => "http://chungcuthetworesidence.com/sites/default/files/chung-cu-quan-ha-dong.jpg",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Chung cu Tu Liem',
                'address' => '25 my dinh',
                'price' => 15000,
                'desciption' => "chat luong tot",
                'url_image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZoy52uxjb4_mKsy-oU6v4NFsV7K-KMDCt8U85S2cZoMiCwOz-",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Chung cu Dich Vong',
                'address' => '2 Dich Vong',
                'price' => 16000,
                'desciption' => "dang ha gia",
                'url_image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpcUVa9C_41MiLjlHweokYlkDnZTh76Y7zvNwwUxpJagEZSV4K",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Chung cu Dich vong 1',
                'address' => '27 my dinh',
                'price' => 17000,
                'desciption' => "dang giam gia",
                'url_image' => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRpcUVa9C_41MiLjlHweokYlkDnZTh76Y7zvNwwUxpJagEZSV4K",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [

                'name' => 'Chung cu Mi Dinh 2',
                'address' => '1450 My dinh',
                'price' => 18000,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [

                'name' => 'Chung cu Mi Dinh 12',
                'address' => '3410 My dinh',
                'price' => 19000,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [

                'name' => 'Chung cu Mi Dinh 13',
                'address' => '11013 My dinh',
                'price' => 21000,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [

                'name' => 'Chung cu Mi Dinh 14',
                'address' => '11014 My dinh',
                'price' => 22000,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [

                'name' => 'Chung cu Mi Dinh6',
                'address' => '1106 My dinh',
                'price' => 121000,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [

                'name' => 'Chung cu Mi Dinh 67',
                'address' => '1107 My dinh',
                'price' => 131000,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [

                'name' => 'Chung cu Mi Dinh 87',
                'address' => '11670 My dinh',
                'price' => 151000,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [

                'name' => 'Chung cu Mi Dinh 45',
                'address' => '11054 My dinh',
                'price' => 141000,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'name' => 'Chung cu Mi Dinh 54',
                'address' => '11056 My dinh',
                'price' => 161000,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [

                'name' => 'Chung cu Mi Dinh 56',
                'address' => '11056 My dinh',
                'price' => 110700,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [

                'name' => 'Chung cu Mi Dinh 76',
                'address' => '11076 My dinh',
                'price' => 110080,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [

                'name' => 'Chung cu Mi Dinh 88',
                'address' => '11078 My dinh',
                'price' => 1100650,
                'desciption' => "dep va dang giam gia",
                'url_image' => "http://chungcugroup.com/wp-content/uploads/2016/07/du-an-my-dinh-pearl.png",
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ]);


        //
    }
}
