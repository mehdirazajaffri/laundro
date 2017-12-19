<?php

namespace App\Repositories;

use App\Models\Bag;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BagRepository
 * @package App\Repositories
 * @version December 19, 2017, 12:38 pm UTC
 *
 * @method Bag findWithoutFail($id, $columns = ['*'])
 * @method Bag find($id, $columns = ['*'])
 * @method Bag first($columns = ['*'])
*/
class BagRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'created_date',
        'modified_date',
        'bar_code',
        'customer_name',
        'type',
        'cleanly_portal_wf',
        'cleanly_portal_hd_count',
        'status',
        'shift_id',
        'picture_url'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Bag::class;
    }
}
