<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
	use HasFactory;
	// si no respecto l convecion
	protected $table = 'cursos';
}
