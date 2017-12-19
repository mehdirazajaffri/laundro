<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Bag",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="bar_code",
 *          description="bar_code",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="customer_name",
 *          description="customer_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="type",
 *          description="type",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cleanly_portal_wf",
 *          description="cleanly_portal_wf",
 *          type="number",
 *          format="float"
 *      ),
 *      @SWG\Property(
 *          property="cleanly_portal_hd_count",
 *          description="cleanly_portal_hd_count",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="shift_id",
 *          description="shift_id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="picture_url",
 *          description="picture_url",
 *          type="string"
 *      )
 * )
 */
class Bag extends Model
{
    use SoftDeletes;

    public $table = 'cleanly_bag';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bar_code' => 'string',
        'customer_name' => 'string',
        'type' => 'string',
        'cleanly_portal_wf' => 'float',
        'cleanly_portal_hd_count' => 'integer',
        'status' => 'integer',
        'shift_id' => 'integer',
        'picture_url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
