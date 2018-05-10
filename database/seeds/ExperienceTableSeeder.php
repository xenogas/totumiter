<?php

use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('experience_companies')->insert([
            [
                'name' => 'BrokenMyth Studios',
                'city' => 'Fairport',
                'state' => 'NY',
                'zip' => 14450,
                'url' => 'http://www.brokenmyth.com'
            ]
        ]);
        DB::table('experience_histories')->insert([
            [
                'position' => 'Lead Software Engineer',
                'company_id' => 1,
                'summary' => "Responsible for managing client expectations in regards to software development, handling requirements elicitation and translating those through designs into actionable tasks. Managed in-house and outsourced developers, ensuring the on-time delivery of projects.",
                'start' => new DateTime('2012-09-01'),
                'until' => new DateTime('2017-11-30')
            ]
        ]);
        DB::table('experience_history_details')->insert([
            [
                'type' => 1,
                'description' => "Directed teams of eight to ten in the production of mobile and web marketing and training solutions utilizing emerging technologies to increase user excitement, engagement and retention.",
                'history_id' => 1
            ],
            [
                'type' => 1,
                'description' => "Acting as Chief Architect, helped grow a local startup into a multi-million-dollar company by providing feasibility analysis, needs assessments, architecture and leading the implementation of their online services.",
                'history_id' => 1
            ],
            [
                'type' => 1,
                'description' => "Presented to CTOs technical strategies which both resolved long standing concerns and provided cost effective solutions when compared among industry leaders.",
                'history_id' => 1
            ],
            [
                'type' => 1,
                'description' => "Provided aggressive concept-to-completion timelines and managed client expectations for product delivery.",
                'history_id' => 1
            ],
            [
                'type' => 1,
                'description' => "Designed and led development of native Android and iOS applications for release through app stores and enterprise distribution.",
                'history_id' => 1
            ],
            [
                'type' => 1,
                'description' => "Administered production and development environments on AWS and in-house servers.",
                'history_id' => 1
            ],
            [
                'type' => 2,
                'description' => "Enterprise Architect",
                'history_id' => 1
            ],
            [
                'type' => 2,
                'description' => "Software Team Leadership",
                'history_id' => 1
            ],
            [
                'type' => 2,
                'description' => "Aggressive Project Timelines",
                'history_id' => 1
            ]
        ]);
    }
}
