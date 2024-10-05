<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model {
    // Määritetään mitkä kentät ovat täytettäviä mass-assignmentissä
    protected $fillable = ['title', 'is_completed'];

    // Määritetään, että is_completed käsitellään boolean-arvona
    protected $casts = [
        'is_completed' => 'boolean',
    ];

    // Piilotetaan created_at ja updated_at vastauksista
    protected $hidden = ['created_at', 'updated_at'];
}
