<?php

/**
 * Created by Reliese Model.
 */

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Commande
 * 
 * @property int $id
 * @property int $clients_id
 * @property int $menus_id
 * @property float $longitude
 * @property float $latitude
 * @property string $adresse
 * @property string $deleted_at
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Client $client
 * @property Menu $menu
 *
 * @package App
 */
class Commande extends Model
{
	use SoftDeletes;
	protected $table = 'commandes';

	protected $casts = [
		'clients_id' => 'int',
		'menus_id' => 'int',
		'longitude' => 'float',
		'latitude' => 'float'
	];

	protected $fillable = [
		'clients_id',
		'menus_id',
		'longitude',
		'latitude',
		'adresse'
	];

	public function client()
	{
		return $this->belongsTo(Client::class, 'clients_id');
	}

	public function menu()
	{
		return $this->belongsTo(Menu::class, 'menus_id');
	}
}
