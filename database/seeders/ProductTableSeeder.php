<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('products')->insert([
            [
                'name' => 'Asus TUF A15',
                'description' => 'Ini laptop asus TUF A15',
                'img_url' => "https://dlcdnwebimgs.asus.com/gain/7909b0a1-1457-4953-a9e7-41b2be78affa/w300/fwebp",
                'price' => 100,
                'stock' => 50,
                'category_id' => 1,
                'brand_id' => 2,
                'created_at' => $now,
                'updated_at' => null,
            ],
            [
                'name' => 'LOGITECH G502 HERO',
                'description' => 'Ini Mouse LOGITECH',
                'img_url' => "https://resource.logitechg.com/w_1800,c_limit,f_auto,q_auto,f_auto,dpr_auto/d_transparent.gif/content/dam/gaming/en/non-braid/hyjal-g502-hero/g502-hero-intro-nb.png?v=1",
                'price' => 100,
                'stock' => 50,
                'category_id' => 3,
                'brand_id' => 1,
                'created_at' => $now,
                'updated_at' => null,
            ],
            [
                'name' => 'Samsung Odessey Ark',
                'description' => 'Monitor Besar',
                'img_url' => "https://images.samsung.com/is/image/samsung/p6pim/id/ls55cg970nexxd/gallery/id-odyssey-ark-g97nc-ls55cg970nexxd-537931683?$1300_1038_PNG$",
                'price' => 100,
                'stock' => 50,
                'category_id' => 2,
                'brand_id' => 3,
                'created_at' => $now,
                'updated_at' => null,
            ],
            [
                'name' => '27” IPS Full HD Monitor dengan AMD FreeSync™',
                'description' => 'Ini monitro LG',
                'img_url' => "https://www.lg.com/content/dam/channel/wcms/id/images/monitor/27mr400-b_atiq_eain_id_c/450x450.jpg",
                'price' => 100,
                'stock' => 50,
                'category_id' => 2,
                'brand_id' => 4,
                'created_at' => $now,
                'updated_at' => null,
            ],
            [
                'name' => 'G413 TKL SE Mechanical Gaming Keyboard',
                'description' => 'Ini laptop asus TUF A15',
                'img_url' => "https://resource.logitechg.com/w_692,c_lpad,ar_4:3,q_auto,f_auto,dpr_1.0/d_transparent.gif/content/dam/gaming/en/products/g413-se-tkl/g413-se-tkl-gallery-1-new.png?v=1",
                'price' => 100,
                'stock' => 50,
                'category_id' => 4,
                'brand_id' => 1,
                'created_at' => $now,
                'updated_at' => null,
            ],
        ]);
    }
}
