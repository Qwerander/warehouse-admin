<?php

namespace App\Admin\Widgets;

use TCG\Voyager\Widgets\BaseDimmer;
use App\Models\Category;

class CategoriesWidget extends BaseDimmer
{
    protected $config = [];

    public function run()
    {
        $count = Category::count();
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-categories',
            'title'  => "Категории",
            'text'   => "Всего категорий: {$count}",
            'button' => [
                'text' => 'Управление категориями',
                'link' => route('voyager.categories.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }
}