<?php namespace Khalil\Elearning\Models;

use Model;

/**
 * course Model
 */
class Course extends Model
{
    /**
     * @var string The database table used by the model.
     */
    public $table = 'khalil_elearning_courses';


    use \October\Rain\Database\Traits\Validation;

    public $rules = [
        'name' => 'required'
    ];

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

       'topics' => ['Khalil\Elearning\Models\Topic']

    ];
    public $belongsTo = [
              'level'   => ['khalil\Elearning\Models\Level'],
              'subject' => ['Khalil\Elearning\Models\Subject']  
    ];
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];




  




    /** 
      *  Set Course Name Attribute
     */
    public function setNameAttribute($value)
    {
        if(!$value)
        {
            $this->attributes['name'] = "default";
        }else
        {
            $this->attributes['name'] = $value;

        }
    }

    /** 
     *  Get Language Option in Courses Form 
     */
    public function getLanguageOptions() 
    {
        return ["AR"=>'AR', "EN"=>"EN"];
    }

    /** 
     *  Get Level Option in Courses Form 
     */
    public function getLevelOptions() 
    {
        return \Khalil\elearning\Models\Level::lists('name','id');
    }

    /** 
     *  Get subject Option in Courses Form 
     */
    public function getSubjectOptions() 
    {
        return \Khalil\elearning\Models\Subject::lists('name','id');
    }
    

}
