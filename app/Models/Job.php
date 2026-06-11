<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Job extends Model
{
    //si el nombre de la tabla con coincide con el modelo :
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
        'company_logo',
        'user_id',
    ];

    //relation con el modelo user
    //belongsTo porque un job pertenece a un user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
