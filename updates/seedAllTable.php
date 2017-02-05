<?php namespace Khalil\elearning\Updates;

use Seeder;
use Khalil\Elearning\Models\Level;
use Khalil\Elearning\Models\subject;



class seedAllTables extends Seeder
{

    public function run()
    {


      $faker = \Faker\Factory::create();

      /**
 	    *   Seeding Levels Table
 	    */		

 	     $levels	=  ['1st Primary',
    		          	 '2st Primary',
    		            	'3st Primary',
    		              	'4st Primary',
    		                	'5st Primary'
    		                ];		        

        foreach (range(1, 5) as $index) {

			           $level = [
		                     'name'=> $levels[$index],
		                     'slug'=> str_replace(' ', '-', $levels[$index])
		              ];

             
                  Level::create($level);
        }  


        $subjects = [
           'Math',
           'English',
           'Arabic',
           'Science' 
          ];

          foreach(range(1,4) as $index)
          {

            $subject = [
                'name' => $subjects[$index],
                'slug' => str_replace(' ', '-', $subjects[$index])
            ];

             subject::create($subject);
             
          }


    }




   
}