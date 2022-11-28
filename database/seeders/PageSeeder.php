<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count=0;
        $pages=['Hakkımızda','Kariyer','Vizyonumuz','Misyonumuz'];
        $count++;
        foreach ($pages as $page)
            DB::table('pages')->insert([
            'title' => $page,
            'slug'=> Str::slug($page),
            'image'=>'https://businessimmigrationgermany.com/tema/genel/uploads/hizmetler/business-plan.jpg',
            'content'=>'lorem ipmus dolor sit amet',
            'order'=>$count,
            'created_at'=>now(),
            'updated_at'=>now()

        ]);
    }
}
