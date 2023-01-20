<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Item;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\cart;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Item::create([
            'name' => 'Black Shirt',
            'image' => 'Foto/blackshirt.jpg',
            'price' =>  75000,
            'desc' => 'aku hanyalah sebuah baju hitam',
            'stock' => 20,

        ]);

        Item::create([
            'name' => 'Grey Cap',
            'image' => 'Foto/greycap.jpg',
            'price' =>  120000,
            'desc' => 'Sebuah topi yang membuatmu tampil keren',
            'stock' => 20,
        ]);

        Item::create([
            'name' => 'Ankle Pants',
            'image' => 'Foto/celanaankle.jpg',
            'price' =>  225000,
            'desc' => 'Sebuah celana panjang formal yang dapat kamu gunakan saat ke kantor',
            'stock' => 20,
        ]);

        Item::create([
            'name' => 'Black Varsity',
            'image' => 'Foto/blackvarsity.jpg',
            'price' =>  320000,
            'desc' => 'Sebuah Jaket hitam yang membuat tampilanmu makin keren',
            'stock' => 20,
        ]);

        Item::create([
            'name' => 'Cargo Pants',
            'image' => 'Foto/celanacargo.jpg',
            'price' =>  200000,
            'desc' => 'Sebuah celana cargo untuk dipakai ketika ingin keluar',
            'stock' => 20,
        ]);

        Item::create([
            'name' => 'Sling Bag',
            'image' => 'Foto/slingbag.jpg',
            'price' =>  175000,
            'desc' => 'Sebuah tas yang stylish',
            'stock' => 20,
        ]);

        Item::create([
            'name' => 'Purple Varsity',
            'image' => 'Foto/purpleshirt.jpg',
            'price' =>  375000,
            'desc' => 'Sebuah Jaket yang membuat tampilan mu makin keren',
            'stock' => 20,
        ]);

        Item::create([
            'name' => 'Short Pants',
            'image' => 'Foto/celanapendek.jpg',
            'price' =>  165000,
            'desc' => 'Sebuah celana pendek untuk dipakai sehari - hari',
            'stock' => 20,
        ]);

        cart::create([
            'name' => 'Ankle Pants',
            'image' => 'Foto/celanaankle.jpg',
            'price' =>  225000,
            'quantity' => 3,
            'subtotal' => 225000 * 3
        ]);

        cart::create([
            'name' => 'Black Varsity',
            'image' => 'Foto/blackvarsity.jpg',
            'price' =>  320000,
            'quantity' => 3,
            'subtotal' => 320000 * 3
        ]);

        cart::create([
            'name' => 'Grey Cap',
            'image' => 'Foto/greycap.jpg',
            'price' =>  120000,
            'quantity' => 3,
            'subtotal' => 120000 * 3
        ]);

        User::create([
            'name' => 'admin',
            'email' => 'bypass@gmail.com',
            'password' => bcrypt('12341234'),
            'phone' => '1234512345',
            'address' => '12345',
        ]);
    }
}
