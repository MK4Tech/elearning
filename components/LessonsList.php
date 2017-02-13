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



   // private function applyFilters()
   //  {
   //      if (\Request::has('subject')) {
   //          $entityTerm = \Request::get('series');
   //          $entity = Series::where('name', 'like', $entityTerm)->first();
   //          if ($entity)
   //              $this->booksQ->where("series_id", $entity->id);

   //      }elseif(\Request::has('level')){
   //          $entityTerm = \Request::get('level');
   //          $entity = Level::where('name', 'like', $entityTerm)->first();
   //          if ($entity)
   //              $this->booksQ->where("level_id", $entity->id);
   //      }

   //  }   
 

 
  public function courese()
  {

  }
  
  public function levels()
  {    
     $levels = Level::orderBy("name")->get();


     return $levels->lists("name");
  }

  public function subjects()
  {
      $subjects = Level::find(1)->subjects()->orderBy('name')->get();       
    // $subjects = Db::table('khalil_elearning_subjects')
    // ->join('khalil_elearning_courses',
    //         'khalil_elearning_subjects.id',
    //          '=',
    //         'khalil_elearning_courses.subject_id')
    // ->join('khalil_elearning_levels',
    //         'khalil_elearning_courses.level_id', 
    //         '=',
    //          'khalil_elearning_levels.id')
    // ->select('khalil_elearning_subjects.name')
    // ->get();    

    return $subjects;


  }

  //  private function getSubjectsPerLevel($id) {
  //     return Level::find($id)->subjects;
  //  }

}
