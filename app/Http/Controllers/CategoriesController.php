<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Http\Requests\CategorieRequest;
use Session;

class CategoriesController extends MainController
{

    public function index()
    {self::$viewData['categories'] = Categorie::all()->toArray();
        return view('cms.category_index', self::$viewData);

    }

    public function create()
    { // create new category
        return view('cms.category_add', self::$viewData);
    }

    public function store(CategorieRequest $request)
    { // save new menu
        Categorie::save_new($request);
        return redirect('cms/categories');
    }

    public function show($id)
    { // show the page before delete
        self::$viewData['item_id'] = $id;
        return view('cms.category_delete', self::$viewData);
    }

    // edit category
    public function edit($id)
    {
        self::$viewData['item'] = Categorie::find($id)->toArray();
        return view('cms.category_edit', self::$viewData);
    }

    public function update(CategorieRequest $request, $id)
    {
        Categorie::update_item($request, $id);
        return redirect('cms/categories');
    }

    public function destroy($id)
    {
        Categorie::destroy($id);

        Session::flash('sm', 'The category have been deleted');

        return redirect('cms/categories');

    }
}
