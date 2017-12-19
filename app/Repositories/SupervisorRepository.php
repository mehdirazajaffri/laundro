<?php

namespace App\Repositories;

use App\Models\Supervisor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SupervisorRepository
 * @package App\Repositories
 * @version December 19, 2017, 12:39 pm UTC
 *
 * @method Supervisor findWithoutFail($id, $columns = ['*'])
 * @method Supervisor find($id, $columns = ['*'])
 * @method Supervisor first($columns = ['*'])
*/
class SupervisorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'created_date',
        'modified_date',
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Supervisor::class;
    }
}
