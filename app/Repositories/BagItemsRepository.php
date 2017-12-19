<?php

namespace App\Repositories;

use App\Models\BagItems;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BagItemsRepository
 * @package App\Repositories
 * @version December 19, 2017, 12:40 pm UTC
 *
 * @method BagItems findWithoutFail($id, $columns = ['*'])
 * @method BagItems find($id, $columns = ['*'])
 * @method BagItems first($columns = ['*'])
*/
class BagItemsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'created_date',
        'modified_date',
        'quantity',
        'bag_id_id',
        'item_id_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return BagItems::class;
    }
}
