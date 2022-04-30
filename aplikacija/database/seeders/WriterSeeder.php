<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Writer;

class WriterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Writer::factory()->count(30)->create();
    }
}
