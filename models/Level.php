<?php namespace Khalil\Elearning\Models;

use Model;

/**
 * level Model
 */
class Level extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'khalil_elearning_levels';

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

            'course' => ['khalil\Elearning\Models\course'] 
    ];
    public $belongsTo = [];
    public $belongsToMany = [

                // 'subject' => [
                //          'Khalil\Elearning\Models\subject', 
                //          'table' => 'khalil_elearning_courses',
                //          'key'      => 'level_id',
                //          'otherKey' => 'subject_id'
                //          ]
            ];

    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];




     /*======================
       Translate the Model
     ========================*/  
     
     /**
     * Softly implement the TranslatableModel behavior.
     */
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    /**
     * @var array Attributes that support translation, if available.
     */
    public $Translatable = ['name'];     



    /**
     * Register new Twig variables
     * @return array
     */
    public function registerMarkupTags()
    {
        // Check the translate plugin is installed
        if (!class_exists('RainLab\Translate\Behaviors\TranslatableModel'))
            return;

        return [
            'filters' => [
                '_' => ['Lang', 'get'],
                '__' => ['Lang', 'choice'],
            ]
        ];
    }

}
