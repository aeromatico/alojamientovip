<?php namespace Aero\Manager\Models;

use Model;

/**
 * Model
 */
class Faqs extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'aero_manager_faqs';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
