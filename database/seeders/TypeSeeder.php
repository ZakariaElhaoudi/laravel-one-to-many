<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Type;
use App\Models\Project;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = Project :: all();

        foreach ($projects as $project) {

            $type = Type::factory()->create();
            $project->type_id = $type->id;
            $project->save();
            
        }
    }  
}