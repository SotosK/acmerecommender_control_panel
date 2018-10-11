<?php

namespace App\Repositories;

use App\Models\UserAccount;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class UserAccountRepository
 * @package App\Repositories
 * @version October 13, 2017, 11:56 am UTC
 *
 * @method UserAccount findWithoutFail($id, $columns = ['*'])
 * @method UserAccount find($id, $columns = ['*'])
 * @method UserAccount first($columns = ['*'])
*/
class UserAccountRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'user_id',
        'site_url',
        'api_key'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserAccount::class;
    }
}
