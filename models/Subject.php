<?php namespace Khalil\Elearning\Models;

use Model;

/**
 * subject Model
 */
class Subject extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'khalil_elearning_subjects';

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
    public $hasMany = [ 'course' => ['Khalil\Elearning\Models\course']   ];
    public $belongsTo = [
//             // each subject belongs to one parent
//            'subjectParent' => ['Khalil\Elearning\Modules\subject_parent'];     
    ];
    public $belongsToMany = [ 'level' => ['Khalil\Elearning\Models\level']   ];    
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
