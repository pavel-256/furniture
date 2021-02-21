<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests\ProductsRequest;
use App\Product;
use Session;

class ProductsController extends MainController
{

    public function index()
    {self::$viewData['products'] = Product::all()->toArray();

        return view('cms.products_index', self::$viewData);

    }

    public function create()
    {self::$viewData['categories'] = Categorie::all()->toArray();
        return view('cms.product_add', self::$viewData);
    }

    public function store(ProductsRequest $request)
    { // save new menu
        Product::save_new($request);
        return redirect('cms/products');
    }

    public function show($id)
    { // show the page before delete
        self::$viewData['item_id'] = $id;
        return view('cms.product_delete', self::$viewData);
    }

    // edit product
    public function edit($id)
    {
        self::$viewData['item'] = Product::find($id)->toArray();
        self::$viewData['categories'] = Categorie::all()->toArray();
        return view('cms.product_edit', self::$viewData);
    }

    public function update(ProductsRequest $request, $id)
    {
        Product::update_item($request, $id);
        return redirect('cms/products');
    }

    public function destroy($id)
    {
        Product::destroy($id);

        Session::flash('sm', 'The product have been deleted');

        return redirect('cms/products');

    }
}
