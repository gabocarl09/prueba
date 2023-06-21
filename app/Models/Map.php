<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Map
 *
 * @property $id
 * @property $departments_name
 * @property $departments_info
 * @property $departments_image
 * @property $created_at
 * @property $updated_at
 *
 * @property Food[] $foods
 * @property TouristDestination[] $touristDestinations
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Map extends Model
{
    
    static $rules = [
		'departments_name' => 'required',
		'departments_info' => 'required',
		'departments_image' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['departments_name','departments_info','departments_image'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function foods()
    {
        return $this->hasMany('App\Models\Food', 'id_maps', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function touristDestinations()
    {
        return $this->hasMany('App\Models\TouristDestination', 'id_maps', 'id');
    }
    

}
