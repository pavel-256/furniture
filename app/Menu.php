<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Session;

class Menu extends Model
{
    // add new menu
    public static function save_new($request)
    {

        $menu = new self();

        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('sm', 'Add menu successfuly !');

    }

    public static function update_item($request, $id)
    {
        // update item
        $menu = self::find($id);
        $menu->link = $request['link'];
        $menu->url = $request['url'];
        $menu->title = $request['title'];
        $menu->save();
        Session::flash('sm', 'The menu updated Successfuly !');

    }

}
