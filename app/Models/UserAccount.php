<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class UserAccount
 * @package App\Models
 * @version October 13, 2017, 11:56 am UTC
 *
 * @property integer user_id
 * @property string site_url
 * @property string api_key
 */
class UserAccount extends Model
{

    public $table = 'user_accounts';
    


    public $fillable = [
        'user_id',
        'site_url',
        'api_key'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'site_url' => 'string',
        'api_key' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'site_url' => 'required|url|unique:user_accounts,site_url'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tastePreferences(){
        return $this->hasMany(TastePreference::class);
    }
    public function topPreferences(){
        return $this->hasMany(TopPreference::class);
    }
}
