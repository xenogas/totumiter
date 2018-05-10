<?php

use Illuminate\Database\Seeder;

class ExpertiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expertise_categories')->insert([
            [
                'name' => 'Languages',
                'weight' => 1
            ],
            [
                'name' => 'APIs',
                'weight' => 2
            ]
        ] );
        DB::table('expertise_skills')->insert([
            [
                'name' => 'C#',
                'category_id' => 1
            ],
            [
                'name' => 'Visual Basic',
                'category_id' => 1
            ],
            [
                'name' => 'jQuery',
                'category_id' => 2
            ]
        ] );
    }
}
