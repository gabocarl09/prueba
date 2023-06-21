<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Suscription
 *
 * @property $id
 * @property $type
 * @property $start_date
 * @property $end_date
 * @property $payment_type
 * @property $payment_ammount
 * @property $id_foods
 * @property $created_at
 * @property $updated_at
 *
 * @property Food $food
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Suscription extends Model
{
    
    static $rules = [
		'type' => 'required',
		'start_date' => 'required',
		'end_date' => 'required',
		'payment_type' => 'required',
		'payment_ammount' => 'required',
		'id_foods' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type','start_date','end_date','payment_type','payment_ammount','id_foods'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function food()
    {
        return $this->hasOne('App\Models\Food', 'id', 'id_foods');
    }
    

}
