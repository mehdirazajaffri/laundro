<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @SWG\Definition(
 *      definition="Shift",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="vendor",
 *          description="vendor",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="detail",
 *          description="detail",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cleanly_shift",
 *          description="cleanly_shift",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="cleanly_date",
 *          description="cleanly_date",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="washpro_shift",
 *          description="washpro_shift",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="washpro_date",
 *          description="washpro_date",
 *          type="string",
 *          format="date"
 *      ),
 *      @SWG\Property(
 *          property="shift_incharge",
 *          description="shift_incharge",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="shift_incharge_assistant",
 *          description="shift_incharge_assistant",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="status",
 *          description="status",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="supervisor_id",
 *          description="supervisor_id",
 *          type="integer",
 *          format="int32"
 *      )
 * )
 */
class Shift extends Model
{
    // use SoftDeletes;

    public $table = 'cleanly_shift';
    
    const CREATED_AT = 'created_date';
    const UPDATED_AT = 'modified_date';


    // protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vendor' => 'string',
        'detail' => 'string',
        'cleanly_shift' => 'string',
        'cleanly_date' => 'date',
        'washpro_shift' => 'string',
        'washpro_date' => 'date',
        'shift_incharge' => 'string',
        'shift_incharge_assistant' => 'string',
        'status' => 'integer',
        'supervisor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
