<?php

namespace App\Admin\Widgets;

use Backpack\CRUD\app\Library\Widget;
use App\Models\Category;

class CategoriesWidget extends Widget
{
    protected $view = 'admin.widgets.categories';

    /**
     * Get widget data
     *
     * @return array
     */
    public function data()
    {
        return [
            'count' => Category::count(),
            'title' => 'Категории',
            'link'  => backpack_url('category'),
            'icon'  => 'la la-folder'
        ];
    }
}