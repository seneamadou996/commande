<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Gestionnaire
 * 
 * @property int $id
 * @property string $uuid
 * @property string $telephone
 * @property int $users_id
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 *
 * @package App
 */
class Gestionnaire extends Model
{
	use SoftDeletes;
	protected $table = 'gestionnaires';

	protected $casts = [
		'users_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'telephone',
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'users_id');
	}
}
