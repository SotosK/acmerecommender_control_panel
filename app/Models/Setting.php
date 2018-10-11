<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Setting
 * @package App\Models
 * @version February 8, 2018, 3:50 pm UTC
 *
 * @property int user_account_id
 * @property string recommender
 * @property string neighborhood
 * @property string neighborhood_value
 */
class Setting extends Model
{

    public $table = 'settings';
    


    public $fillable = [
        'user_account_id',
        'recommender',
        'neighborhood',
        'neighborhood_value'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'recommender' => 'string',
        'neighborhood' => 'string',
        'neighborhood_value' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_account_id' => 'required',
        'recommender' => 'required'
    ];

    
}
