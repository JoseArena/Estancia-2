<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TutoriaIndividual extends Model
{
    protected $table = 'tutoria_individual';
    protected $dates = ['created_at', 'updated_at', 'fecha'];
}