<?php return [
    'plugin' => [
        'name' => 'Jedilni listi',
        'description' => 'Prikaži jedilni list na spletni strani.',
    ],
    'section' => [
        'title' => 'Naziv',
        'id' => 'Id',
    ],
    'item' => [
        'title' => 'Naziv',
        'price' => 'Cena',
        'description' => 'Opis',
        'tab' => [
            'settings' => 'Nastavitve',
            'allergens' => 'Alergeni',
        ],
        'section' => 'Kategorije',
        'id' => 'Id',
        'allergens' => 'Alergeni',
    ],
    'permissions' => [
        'can_edit_sections' => 'Can edit sections',
        'can_edit_items' => 'Can edit items',
    ],
    'menu' => [
        'menu' => 'Menu',
        'sections' => 'Kategorije',
        'items' => 'Menu',
        'allergens' => 'Alergeni',
        'daily_offers' => 'Malice',
    ],
    'component' => [
        'menu_items' => [
            'name' => 'Menu items',
            'description' => 'Display menu sections and items',
        ],
        'daily_offers' => [
            'name' => 'Daily offers',
            'description' => 'Display daily offers',
        ],
    ],
    'allergen' => [
        'code' => 'Koda',
        'name' => 'Naziv',
        'id' => 'Id',
    ],
    'offer' => [
        'name' => 'Naziv',
        'code' => 'Koda',
        'price' => 'Cena',
        'date' => 'Datum',
        'id' => 'Id',
        'tab' => [
            'allergens' => 'Alergeni',
        ],
        'allergens' => 'Alergeni',
    ],
];