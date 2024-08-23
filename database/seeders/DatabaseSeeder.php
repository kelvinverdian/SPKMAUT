<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\DRC;
use App\Models\VFA;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DRC::insert([
            [
                'grade' => 'A' ,
                'minimal_drc' => 33,
                'maksimal_drc' => 100,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'grade' => 'B',
                'minimal_drc' => 30,
                'maksimal_drc' => 32.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'grade' => 'C',
                'minimal_drc' => 27,
                'maksimal_drc' => 29.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'grade' => 'D',
                'minimal_drc' => 24,
                'maksimal_drc' => 26.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'grade' => 'Non Premi',
                'minimal_drc' => 0,
                'maksimal_drc' => 23.99,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
        VFA::insert([
            [
                'grade' => 'Grade 1',
                'minimal_vfa' => 0.0000,
                'maksimal_vfa' => 0.0200,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'grade' => 'Grade 2',
                'minimal_vfa' => 0.0201,
                'maksimal_vfa' => 0.0400,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'grade' => 'Grade 3',
                'minimal_vfa' => 0.0401,
                'maksimal_vfa' => 0.0800,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'grade' => 'Grade 4',
                'minimal_vfa' => 0.0801,
                'maksimal_vfa' => 0.0900,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'grade' => 'Grade 5',
                'minimal_vfa' => 0.0901,
                'maksimal_vfa' => 0.1000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'grade' => 'Grade 6',
                'minimal_vfa' => 0.1001,
                'maksimal_vfa' => 9.999,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
