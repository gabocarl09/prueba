<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Food
 *
 * @property $id
 * @property $food_name
 * @property $food_recipes
 * @property $relevant_info
 * @property $section_comments
 * @property $id_maps
 * @property $created_at
 * @property $updated_at
 *
 * @property Map $map
 * @property SectionComment[] $sectionComments
 * @property Suscription[] $suscriptions
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Food extends Model
{
    
    static $rules = [
		'food_name' => 'required',
		'food_recipes' => 'required',
		'relevant_info' => 'required',
		'section_comments' => 'required',
		'id_maps' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['food_name','food_recipes','relevant_info','section_comments','id_maps'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function map()
    {
        return $this->hasOne('App\Models\Map', 'id', 'id_maps');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sectionComments()
    {
        return $this->hasMany('App\Models\SectionComment', 'id_foods', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function suscriptions()
    {
        return $this->hasMany('App\Models\Suscription', 'id_foods', 'id');
    }
    

}
