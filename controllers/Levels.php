<?php namespace Khalil\Elearning\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Levels Back-end Controller
 */
class Levels extends Controller
{
     public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
     ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
   

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Khalil.Elearning', 'elearning', 'levels');
    }
}
