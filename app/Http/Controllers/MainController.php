<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Menu;
use App\Product;

class MainController extends Controller
{
    public static $viewData = ['page_title' => 'Furniture | ']; // the pre proprety for title
    public function __construct()
    {
        self::$viewData['menu'] = Menu::all()->toArray();
        self::$viewData['products'] = Product::all()->toArray();
        self::$viewData['categories'] = Categorie::all()->toArray();

    }
}
