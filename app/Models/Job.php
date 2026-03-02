<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //si el nombre de la atbal con coincide con el modelo :
    protected $table = 'job_listings';

    //vamos a usar eso para que este disponible llenar los datos con tinker
    protected $fillable = ['title', 'description'];
}
