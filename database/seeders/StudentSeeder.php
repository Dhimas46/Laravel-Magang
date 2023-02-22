<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



    //   Schema::disableForeignKeyConstraints();
    //   Student::truncate();
    //   Schema::enableForeignKeyConstraints();
    //   $data = [
    //     ['name' => 'Dhimas Wahyu Prayogi', 'gender' => 'L', 'nis' => '213140707111131', 'class_id' => 9],
    //     ['name' => 'Feby Berliana', 'gender' => 'P', 'nis' => '213140707321131', 'class_id' => 10],
    //     ['name' => 'Erland Aditya Wiguna', 'gender' => 'L', 'nis' => '213140707112331', 'class_id' => 11],
    //     ['name' => 'Ayu Andini', 'gender' => 'P', 'nis' => '213140732111131', 'class_id' => 12],
    //   ];
    //   foreach ($data as $value) {
    //     Student::insert([
    //       'name' => $value['name'],
    //       'gender' => $value['gender'],
    //       'nis' => $value['nis'],
    //       'class_id' => $value['class_id'],
    //       'created_at' => Carbon::now(),
    //       'updated_at' => Carbon::now()
    //     ]);
    // }
    Student::factory()->count(30)->create();
  }
}
