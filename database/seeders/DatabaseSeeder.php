<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert(
            [
                'code' => 'B057',
                'name' => 'Информационные технологии',
            ],
        );
        DB::table('departments')->insert(
            [
                'code' => 'B058',
                'name' => 'Информационная безопасность',
            ],
        );
        DB::table('departments')->insert(
            [
                'code' => 'В042',
                'name' => 'Журналистика и репортерское дело',
            ],
        );
        DB::table('departments')->insert(
            [
                'code' => 'В044',
                'name' => 'Менеджмент и управление',
            ],
        );
        DB::table('departments')->insert(
            [
                'code' => 'В046',
                'name' => 'Финансы, экономика, банковское и страховое дело',
            ],
        );
        DB::table('departments')->insert(
            [
                'code' => 'M094',
                'name' => 'Информационные технологии',
            ],
        );
        DB::table('departments')->insert(
            [
                'code' => 'M096',
                'name' => 'Коммуникации и коммуникационные технологии',
            ],
        );
        DB::table('departments')->insert(
            [
                'code' => 'M072',
                'name' => 'Менеджмент и управление',
            ],
        );

        DB::table('levels')->insert(
            [
                'name' => 'A1 Elementary',
            ],
        );
        DB::table('levels')->insert(
            [
                'name' => 'A2 Pre Intermediate',
            ],
        );
        DB::table('levels')->insert(
            [
                'name' => 'B1 Intermediate',
            ],
        );
        DB::table('levels')->insert(
            [
                'name' => 'B2 Upper Intermediate',
            ],
        );
        DB::table('levels')->insert(
            [
                'name' => 'C1 Advanced',
            ],
        );
        DB::table('levels')->insert(
            [
                'name' => 'C2 Proficient',
            ],
        );



    }

}
