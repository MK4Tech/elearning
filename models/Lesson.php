<?php namespace Khalil\Elearning\Models;

use Model;

/**
 * Lesson Model
 */
class Lesson extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'khalil_elearning_lessons';

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
    public $hasMany = [
      'media' => ['khalil\Elearning\Models\Media']       
    ];
    public $belongsTo = [
      'topic' => ['khalil\Elearning\Models\Topic']
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [
       
    ];
    public $attachMany = [];
}
