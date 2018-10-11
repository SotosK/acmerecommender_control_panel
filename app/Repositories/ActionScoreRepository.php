<?php

namespace App\Repositories;

use App\Models\ActionScore;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ActionScoreRepository
 * @package App\Repositories
 * @version February 8, 2018, 4:32 pm UTC
 *
 * @method ActionScore findWithoutFail($id, $columns = ['*'])
 * @method ActionScore find($id, $columns = ['*'])
 * @method ActionScore first($columns = ['*'])
*/
class ActionScoreRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_account_id',
        'action',
        'value',
        'policy'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ActionScore::class;
    }
}
