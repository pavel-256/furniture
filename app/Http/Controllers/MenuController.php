<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Menu;
use Session;

class MenuController extends MainController
{

    public function index()
    { // the first page on menu
        return view('cms.menu_index', self::$viewData);

    }

    public function create()
    { // create new menu
        return view('cms.menu_add', self::$viewData);
    }

    public function store(MenuRequest $request)
    { // save new menu
        Menu::save_new($request);
        return redirect('cms/menu');
    }

    public function show($id)
    { // show the menu before delete
        self::$viewData['item_id'] = $id;
        return view('cms.menu_delete', self::$viewData);
    }

    // edit menu
    public function edit($id)
    {
        self::$viewData['item'] = Menu::find($id)->toArray();
        return view('cms.menu_edit', self::$viewData);
    }

    public function update(MenuRequest $request, $id)
    {
        Menu::update_item($request, $id);
        return redirect('cms/menu');
    }

    public function destroy($id)
    {
        Menu::destroy($id);

        Session::flash('sm', 'the menu have been deleted');

        return redirect('cms/menu');

    }
}
