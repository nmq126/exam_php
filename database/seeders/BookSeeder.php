<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('books')->truncate();
        \Illuminate\Support\Facades\DB::table('books')->insert([
            [
                'bookid' => 1,
                'authorid' => 2,
                'title' => 'The lost symbol',
                'ISBN' => 320000,
                'pub_year' => 1998,
                'available' => '1'
            ],
            [
                'bookid' => 2,
                'authorid' => 4,
                'title' => 'Angel and demon',
                'ISBN' => 320000,
                'pub_year' => 1998,
                'available' => '0'
            ],
            [
                'bookid' => 3,
                'authorid' => 6,
                'title' => 'Inferno',
                'ISBN' => 320000,
                'pub_year' => 1998,
                'available' => '1'
            ],
            [
                'bookid' => 4,
                'authorid' => 5,
                'title' => 'Migrate',
                'ISBN' => 320000,
                'pub_year' => 1995,
                'available' => '1'
            ],
            [
                'bookid' => 5,
                'authorid' => 8,
                'title' => 'Inferno',
                'ISBN' => 320000,
                'pub_year' => 1996,
                'available' => '0'
            ],
            [
                'bookid' => 6,
                'authorid' => 12,
                'title' => 'Dust',
                'ISBN' => 320000,
                'pub_year' => 2000,
                'available' => '1'
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
