<?php namespace Sikhub\RestaurantMenu\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Allergens extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Sikhub.RestaurantMenu', 'sikhub-menu', 'sikhub-allergens');
    }
}
