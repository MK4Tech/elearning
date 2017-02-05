<?php namespace Khalil\Elearning;

use Backend;
use System\Classes\PluginBase;

/**
 * elearning Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'elearning',
            'description' => 'No description provided yet...',
            'author'      => 'khalil',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
       

        // return [
        //     'Khalil\Elearning\Components\MyComponent' => 'myComponent',
        // ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
       
        return [
            'khalil.elearning.some_permission' => [
                'tab' => 'elearning',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {      

        return [
            'elearning' => [
                'label'       => 'elearning',
                'url'         => Backend::url('khalil/elearning/courses'),
                'icon'        => 'icon-leaf',
                'permissions' => ['khalil.elearning.*'],
                'order'       => 500,

                'sideMenu' => [               
                    
                           'courses'=>[
                                  'label' => 'Courses',
                                  'icon'  => 'icon-copy',
                                  'url'   => Backend::url('khalil/elearning/courses'),
                                  'permissions' => ['khalil.elearning.*']        
                           ],
                           'levels' => [
                                  'label' => 'Levels',
                                  'icon'  => 'icon-copy',
                                  'url'   => Backend::url('khalil/elearning/levels'),
                                  'permissions' => ['khalil.elearning.*']  
                           ],   
                           'subjects' => [
                                  'label' => 'Subjects',
                                  'icon'  => 'icon-copy',
                                  'url'   => Backend::url('khalil/elearning/subjects'),
                                  'permissions' => ['khalil.elearning.*']  
                           ],
                            'lessons' => [
                                  'label' => 'Lessons',
                                  'icon'  => 'icon-copy',
                                  'url'   => Backend::url('khalil/elearning/lessons'),
                                  'permissions' => ['khalil.elearning.*']  
                           ],                                
                                 
     
             ] 
         ],       
        ];
    }
}
