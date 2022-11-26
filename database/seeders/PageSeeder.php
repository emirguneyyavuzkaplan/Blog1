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
        $pages=['Hakkımızda','Kariyer','Vizyon','Misyon'];
        foreach ($pages as $id=> $page )
            DB::table('pages')->insert([
            'title' => $page,
            'slug'=> Str::slug($page),
            'image'=>'https://miro.medium.com/max/1000/1*pVAtEbTjgBDqBp0OXMxYww.jpeg',
            'content'=>'Lorem ipusm sit maet imet ler imet lorem ipsum sit
                        Lorem ipusm sit maet imet ler imet lorem ipsum sit',
                'order'=>$id,

            'created_at'=>now(),
            'updated_at'=>now()

        ]);
    }
}
