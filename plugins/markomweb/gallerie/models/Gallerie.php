<?php namespace Markomweb\Gallerie\Models;

use Model;

/**
 * Model
 */
class Gallerie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'markomweb_gallerie_';




    /* Relations */

    public $attachOne = [
        'image' => 'System\Models\File'
    ];

    public $attachMany = [
        'image_gallery' => 'System\Models\File'
    ];



    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
