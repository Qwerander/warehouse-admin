<?php

namespace App\Admin\Widgets;

use Backpack\CRUD\app\Library\Widget;
use App\Models\Product;

class ProductsWidget extends Widget
{
    protected $view = 'admin.widgets.products';

    /**
     * Get widget data
     *
     * @return array
     */
    public function data()
    {
        return [
            'count' => Product::count(),
            'title' => 'Товары',
            'link' => backpack_url('product'),
            'icon' => 'la la-shopping-cart'
        ];
    }
}