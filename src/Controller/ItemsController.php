<?php
namespace App\Controller;

use App\Controller\AppController;

class ItemsController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 10,
        'maxLimit' => 100,
        'fields' => [
            'id', 'name', 'sku', 'description'
        ],
        'sortWhitelist' => [
            'id', 'name', 'sku', 'description'
        ]
    ];
}
