<?php

namespace App\Repositories;

use App\Models\Setting;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SettingRepository
 * @package App\Repositories
 * @version February 8, 2018, 3:50 pm UTC
 *
 * @method Setting findWithoutFail($id, $columns = ['*'])
 * @method Setting find($id, $columns = ['*'])
 * @method Setting first($columns = ['*'])
*/
class SettingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_account_id',
        'recommender',
        'neighborhood',
        'neighborhood_value'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Setting::class;
    }
}
