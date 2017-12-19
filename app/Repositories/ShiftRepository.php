<?php

namespace App\Repositories;

use App\Models\Shift;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ShiftRepository
 * @package App\Repositories
 * @version December 19, 2017, 12:39 pm UTC
 *
 * @method Shift findWithoutFail($id, $columns = ['*'])
 * @method Shift find($id, $columns = ['*'])
 * @method Shift first($columns = ['*'])
*/
class ShiftRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'created_date',
        'modified_date',
        'vendor',
        'detail',
        'cleanly_shift',
        'cleanly_date',
        'washpro_shift',
        'washpro_date',
        'shift_incharge',
        'shift_incharge_assistant',
        'status',
        'supervisor_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Shift::class;
    }
}
