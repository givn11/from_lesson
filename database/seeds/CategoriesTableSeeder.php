<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'ADIDAS',
            'alias' => 'adidas',
            'description' => 'немецкий промышленный концерн, специализирующийся на выпуске спортивной обуви, одежды и инвентаря. ',
        ]);
        DB::table('categories')->insert([
            'title' => 'NIKE',
            'alias' => 'nike',
            'description' => 'американская компания, всемирно известный производитель спортивной одежды и обуви.',
        ]);
        DB::table('categories')->insert([
            'title' => 'PUMA',
            'alias' => 'puma',
            'description' => 'промышленная компания Германии, специализирующаяся на выпуске спортивной обуви, одежды, инвентаря и парфюмерии под торговой маркой Puma.',
        ]);
    }
}
