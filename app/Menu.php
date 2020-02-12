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
 * Class Menu
 * 
 * @property int $id
 * @property string $uuid
 * @property string $titre
 * @property string $description
 * @property string $categorie
 * @property string $image_url
 * @property string $image_name
 * @property string $image_driver
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Commande[] $commandes
 *
 * @package App
 */
class Menu extends Model
{
	use SoftDeletes;
	protected $table = 'menus';

	protected $fillable = [
		'uuid',
		'titre',
		'description',
		'categorie',
		'image_url',
		'image_name',
		'image_driver'
	];

	public function commandes()
	{
		return $this->hasMany(Commande::class, 'menus_id');
	}
}
