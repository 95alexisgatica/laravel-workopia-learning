<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Job;
use App\Models\User;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //aqui se pueden agregar trabajos manualmente o usar un factory para generar datos aleatorios
        $jobListings = include database_path('seeders/data/job_listings.php');

        //obtenemos el id del usuario de prueba para asignarle los trabajos
        $testUserId = User::where('email', 'test@test.com')->value('id');

        //conseguimos todos los ids de los usuarios para asignarles trabajos
        $userIds = User::where('email', '!=', 'test@test.com')->pluck('id')->toArray();

        foreach ($jobListings as $index => &$listing) {

            if ($index < 2) {
                //asignamos un user_id aleatorio de los usuarios existentes
                $listing['user_id'] = $testUserId;
            } else {
                //asignamos un user_id aleatorio de los usuarios existentes
                $listing['user_id'] = $userIds[array_rand($userIds)];
            }

            //agregar timestamps
            $listing['created_at'] = now();
            $listing['updated_at'] = now();
        }

        //insertamos los trabajos en la base de datos
        DB::table('job_listings')->insert($jobListings);
        echo "Inserted " . count($jobListings) . " job listings.\n";
    }
}
