<?php namespace Khalil\Elearning\Components;

use Cms\Classes\ComponentBase;
use Khalil\Elearning\Models\Level;
use Khalil\Elearning\Models\Subject;
use Khalil\Elearning\Models\Lesson;
use Khalil\Elearning\Models\Course;
use DB;


class LessonsList extends ComponentBase
{



    public function componentDetails()
    {
        return [
            'name'        => 'lessonsList Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }





   private $lessonQ;
   private $courseQ;
   private $levels; 



   private function applyFilters()
    {
            $subjectEntityTerm = \Request::get('subject');
            $levelEntityTerm   = \Request::get('level');   
            $levelEntity   = level::where('name', 'like', $levelEntityTerm )->first();
            $subjectEntity = subject::where('name', 'like', $subjectEntityTerm)->first();
            

            // get the course depends on subject & level
            if ($levelEntity)
            {
                if($subjectEntity)
                $this->courseQ->where("level_id", $levelEntity->id)
                               ->where("subject_id", $subjectEntity->id)->first();
            }            
      

    }
 
  public function init()
  {
     $this->courseQ = Course::all();    
  }
 
  public function course()
  {
      global $courseQ;
      $result;    

      if (\Request::has('level') && \Request::has('subject')) 
      {
         $this->applyFilters();
         $result = $courseQ;
      }
      else{
         $result = $courseQ->find(1);
      }

      return $result;
  }
  
  public function levels()
  {    

     $levels = Level::orderBy("name")->get();
     return $levels;
  }

  
  
}
