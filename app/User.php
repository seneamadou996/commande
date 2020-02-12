<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * 
 * @property int $id
 * @property string $uuid
 * @property string $nom
 * @property string $prenom
 * @property string $telephone
 * @property string $email
 * @property string $role
 * @property Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Client[] $clients
 * @property Collection|Gestionnaire[] $gestionnaires
 *
 * @package App
 */
class User extends Model
{
	use SoftDeletes;
	protected $table = 'users';

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'uuid',
		'nom',
		'prenom',
		'telephone',
		'email',
		'role',
		'email_verified_at',
		'password',
		'remember_token'
	];

	public function client()
	{
		return $this->hasOne(Client::class, 'users_id');
	}

	public function gestionnaire()
	{
		return $this->hasOne(Gestionnaire::class, 'users_id');
	}
}
