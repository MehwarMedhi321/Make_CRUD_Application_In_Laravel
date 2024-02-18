<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use Illuminate\Support\Facades\File;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $json = file::get(path: 'database/json/student.json');
        // $students = collect(json_decode($json));
        // $students->each(function ($student) {
        //     Student::create([
        //         'name' => $student->name,
        //         'email' => $student->email
        //     ]);
        // });

        for ($i=0; $i <10 ; $i++) { 
               Student::create([
                // 'id' => fake()->id,
                'name' => fake()->name,
                'age' => fake()->numberBetween(18,100),
                'email' => fake()->email
                // 'address' => fake()->address,
                
   
            ]);
        }
    }
}
