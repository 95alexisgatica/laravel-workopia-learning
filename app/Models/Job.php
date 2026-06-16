<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Job extends Model
{
    use HasFactory;
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
        'address',
        'city',
        'state',
        'zipcode',
        'contact_email',
        'contact_phone',
        'company_name',
        'company_description',
        'company_logo',
        'user_id',
        'title',
        'description',
        'company_website',
    ];

    //relation con el modelo user
    //belongsTo porque un job pertenece a un user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
