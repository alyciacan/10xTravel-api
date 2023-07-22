<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $programs = [
            [
                'id' => 1,
                'name' => 'American Express Membership Rewards®',
                'image' => 'program_images/rEedLTQS0a3O6mbAtgobjJncv7dsfZ7GMCWj0lnQ.png',
                'created_at' => '2022-01-24 13:50:23',
                'updated_at' => '2022-01-28 18:55:47',
                'type' => 'flexible_currency',
                'expire_day' => null,
                'expire_month' => null,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
            [
                'id' => 2,
                'name' => 'Chase Ultimate Rewards®',
                'image' => 'program_images/KHnGhfxvlUmugViE71GNgY3rIN9zZu0IHogInhab.png',
                'created_at' => '2022-01-24 13:52:06',
                'updated_at' => '2022-01-28 04:08:30',
                'type' => 'flexible_currency',
                'expire_day' => null,
                'expire_month' => null,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
            [
                'id' => 3,
                'name' => 'American Airlines AAdvantage®',
                'image' => 'program_images/DBM28vilGPpstKUIEtUJxehgQqBV7InVmIoXYAR5.png',
                'created_at' => '2022-01-24 13:59:11',
                'updated_at' => '2022-01-28 18:57:15',
                'type' => 'airline',
                'expire_day' => null,
                'expire_month' => null,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
            [
                'id' => 873,
                'name' => 'MeliaRewards',
                'image' => 'programs_images/ZcbNjtsouKs1AZNMgMcT1LfUkb9sSWFBPr44igb4.png',
                'created_at' => '2023-03-29 15:52:18',
                'updated_at' => '2023-03-29 15:52:18',
                'type' => 'hotel',
                'expire_day' => 1,
                'expire_month' => 1,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
            [
                'id' => 874,
                'name' => 'Korean Air Skypass',
                'image' => 'programs_images/GsjVcgCuTIywhz0vKuxE7dhVflAVuZjB5dhEGubo.png',
                'created_at' => '2023-03-21 01:08:35',
                'updated_at' => '2023-03-21 01:08:35',
                'type' => 'airline',
                'expire_day' => 1,
                'expire_month' => 1,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
            [
                'id' => 875,
                'name' => 'British Airways Avios',
                'image' => 'programs_images/TB1ei5zScy69HZE6RtNC2fcxapHLjPhIEOmtagtI.png',
                'created_at' => '2023-04-05 13:29:14',
                'updated_at' => '2023-04-05 13:29:14',
                'type' => 'airline',
                'expire_day' => 1,
                'expire_month' => 1,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
            [
                'id' => 876,
                'name' => 'N/A',
                'image' => 'programs_images/HMlWHZPkXS3wtFnSy4YmSyXyTsedaXkMsCTHO3Y0.png',
                'created_at' => '2023-04-05 13:41:01',
                'updated_at' => '2023-04-05 13:41:01',
                'type' => 'na',
                'expire_day' => 1,
                'expire_month' => 1,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 'f',
            ],
            [
                'id' => 908,
                'name' => 'Asiana Club',
                'image' => 'programs_images/9seBNtN4YAFHhtLq8CfA9F1oVjegyaElhfTHd4JD.jpg',
                'created_at' => '2023-04-21 01:55:56',
                'updated_at' => '2023-04-21 01:55:56',
                'type' => 'airline',
                'expire_day' => 1,
                'expire_month' => 1,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
            [
                'id' => 909,
                'name' => 'Lufthansa Miles & More',
                'image' => 'programs_images/O4Khv0nOAVgDCisZHaABK3yIDlgXb3lkXTM7ut9u.jpg',
                'created_at' => '2023-04-21 02:10:07',
                'updated_at' => '2023-04-21 02:10:07',
                'type' => 'airline',
                'expire_day' => 1,
                'expire_month' => 1,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
            [
                'id' => 910,
                'name' => 'USAA Rewards™',
                'image' => 'programs_images/ZCQVyocEDhJZmN271kwGcumZbbXq8DQnQthIdmy8.png',
                'created_at' => '2023-04-25 21:28:49',
                'updated_at' => '2023-04-25 21:28:49',
                'type' => 'cashback',
                'expire_day' => 1,
                'expire_month' => 1,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
            [
                'id' => 911,
                'name' => 'TAP Miles&Go',
                'image' => 'programs_images/XqzsVsIOESbK26WeoFmRf6dbPyeHAIwY4VLuJ4wj.png',
                'created_at' => '2023-05-27 23:51:29',
                'updated_at' => '2023-05-27 23:51:29',
                'type' => 'airline',
                'expire_day' => 1,
                'expire_month' => 1,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
            [
                'id' => 912,
                'name' => 'Air Europa SUMA',
                'image' => 'programs_images/XS4t6ffuMQcBNg79ZwJztmBNBAaLqcFUQcEzJnYm.png',
                'created_at' => '2023-05-27 23:52:37',
                'updated_at' => '2023-05-27 23:52:37',
                'type' => 'airline',
                'expire_day' => 1,
                'expire_month' => 1,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
            [
                'id' => 913,
                'name' => 'Drury Rewards',
                'image' => 'programs_images/LHPo3XbaNi84ckF8Wr2Nmgnu32j2SCNJF6hWWRNB.png',
                'created_at' => '2023-06-01 20:46:39',
                'updated_at' => '2023-06-01 20:46:39',
                'type' => 'hotel',
                'expire_day' => 1,
                'expire_month' => 1,
                'consolidate_rewards' => 'f',
                'allow_auto_generate' => 't',
            ],
        ];

        // Insert the data into the 'programs' table
        DB::table('programs')->insert($programs);
    }
}
