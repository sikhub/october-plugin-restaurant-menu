<?php namespace BlazCigale\RestaurantMenu\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Sections extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('BlazCigale.RestaurantMenu', 'blazcigale-menu', 'blazcigale-sections');
    }
}
