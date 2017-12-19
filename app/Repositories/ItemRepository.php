<?php

namespace App\Repositories;

use App\Models\Item;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ItemRepository
 * @package App\Repositories
 * @version December 19, 2017, 12:37 pm UTC
 *
 * @method Item findWithoutFail($id, $columns = ['*'])
 * @method Item find($id, $columns = ['*'])
 * @method Item first($columns = ['*'])
*/
class ItemRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'created_date',
        'modified_date',
        'name',
        'description',
        'price'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Item::class;
    }
}
