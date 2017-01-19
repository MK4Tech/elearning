<?php namespace Khalil\Elearning\Models;

use Model;

/**
 * Media Model
 */
class Media extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'khalil_elearning_media';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
