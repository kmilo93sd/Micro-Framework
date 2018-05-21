<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Example extends Model
{
	protected $primaryKey = 'anyPK';

	protected $timestamps = false;

	protected $fillable = [
		'field_one',
		'field_two',
		'any_field'
	];
}