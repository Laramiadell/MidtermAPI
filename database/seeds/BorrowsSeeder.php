<?php

use Illuminate\Database\Seeder;

class BorrowsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Borrows::class, 10)->create();
    }
}
