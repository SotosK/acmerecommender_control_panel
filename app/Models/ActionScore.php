<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class ActionScore
 * @package App\Models
 * @version February 8, 2018, 4:32 pm UTC
 *
 * @property integer user_account_id
 * @property string action
 * @property double value
 * @property string policy
 */
class ActionScore extends Model
{

    public $table = 'action_scores';
    


    public $fillable = [
        'user_account_id',
        'action',
        'value',
        'policy'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_account_id' => 'integer',
        'action' => 'string',
        'value' => 'double',
        'policy' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_account_id' => 'required',
        'action' => 'required',
        'value' => 'required',
        'policy' => 'required'
    ];

    
}
