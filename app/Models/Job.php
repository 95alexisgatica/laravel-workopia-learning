<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //si el nombre de la atbal con coincide con el modelo :
    protected $table = 'job_listings';

    //vamos a usar eso para que este disponible llenar los datos con tinker
    protected $fillable = [
        'salary',
        'tags',
        'job_type',
        'remote',
        'requirements',
        'benefits',
        'adress',
        'city',
        'state',
        'zipcode',
        'contact_email',
        'contact_phone',
        'company_name',
        'company_description',
        'company_logo'
    ];
}
