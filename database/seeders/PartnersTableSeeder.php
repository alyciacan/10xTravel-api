<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Partner;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'source_program_id' => 1,
            'destination_program_id' => 841,
            'transfer_rate' => 1.0000,
            'transfer_time' => 0,
            'transfer_time_units' => 'minutes',
            'bonus_rate' => 0,
            'created_at' => '2023-06-29 22:56:53',
            'updated_at' => '2023-06-29 23:35:55',
            'bonus_expiration' => null,
            'deleted_at' => null
        ]);

        Partner::create([
            'source_program_id' => 1,
            'destination_program_id' => 9,
            'transfer_rate' => 0.67000,
            'transfer_time' => 1,
            'transfer_time_units' => 'day',
            'bonus_rate' => 0,
            'created_at' => '2023-06-29 22:56:53',
            'updated_at' => '2023-06-29 23:35:55',
            'bonus_expiration' => null,
            'deleted_at' => null
        ]);

        Partner::create([
            'source_program_id' => 1,
            'destination_program_id' => 8,
            'transfer_rate' => .50000,
            'transfer_time' => 2,
            'transfer_time_units' => 'days',
            'bonus_rate' => 0,
            'created_at' => '2023-06-29 22:56:53',
            'updated_at' => '2023-06-29 23:35:55',
            'bonus_expiration' => null,
            'deleted_at' => null
        ]);

        Partner::create([
            'source_program_id' => 6,
            'destination_program_id' => 848,
            'transfer_rate' => 1.0000,
            'transfer_time' => 0,
            'transfer_time_units' => 'minutes',
            'bonus_rate' => 0,
            'created_at' => '2023-06-29 22:56:53',
            'updated_at' => '2023-06-29 23:35:55',
            'bonus_expiration' => null,
            'deleted_at' => null
        ]);

        Partner::create([
            'source_program_id' => 6,
            'destination_program_id' => 849,
            'transfer_rate' => 0.86956,
            'transfer_time' => 0,
            'transfer_time_units' => 'minutes',
            'bonus_rate' => 1,
            'created_at' => '2023-06-29 22:56:53',
            'updated_at' => '2023-06-29 23:35:55',
            'bonus_expiration' => '2023-08-01 00:00:00',
            'deleted_at' => null
        ]);

        Partner::create([
            'source_program_id' => 6,
            'destination_program_id' => 849,
            'transfer_rate' => 0.92344,
            'transfer_time' => 0,
            'transfer_time_units' => 'minutes',
            'bonus_rate' => 1,
            'created_at' => '2023-06-29 22:56:53',
            'updated_at' => '2022-06-29 23:35:55',
            'bonus_expiration' => '2022-07-01 00:00:00',
            'deleted_at' => null
        ]);
    }
}
