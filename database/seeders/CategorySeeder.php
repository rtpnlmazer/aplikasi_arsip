<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name'=>'Undangan','description'=>'Undangan rapat/koordinasi, dll.'],
            ['name'=>'Pengumuman','description'=>'Surat-surat terkait pengumuman.'],
            ['name'=>'Nota Dinas','description'=>'Nota dinas internal.'],
            ['name'=>'Pemberitahuan','description'=>'Pemberitahuan umum.'],
        ];
        foreach ($data as $row) \App\Models\Category::firstOrCreate(['name'=>$row['name']], $row);
    }
}
