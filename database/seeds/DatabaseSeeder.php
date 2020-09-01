<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Subjects')->insert(['desc' => 'Reclamo']);
        DB::table('Subjects')->insert(['desc' => 'Solicitud']);
        DB::table('Subjects')->insert(['desc' => 'Queja']);

        factory(\App\Message::class)->times(50)->create();
    }
}
