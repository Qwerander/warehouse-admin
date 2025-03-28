<?php

namespace App\Admin\Widgets;

use TCG\Voyager\Widgets\BaseDimmer;
use App\Models\Product;

class ProductsWidget extends BaseDimmer
{
    protected $config = [];

    public function run()
    {
        $count = Product::count();
        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-bag',
            'title'  => "Товары",
            'text'   => "Всего товаров: {$count}",
            'button' => [
                'text' => 'Управление товарами',
                'link' => route('voyager.products.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
        ]));
    }
}