<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;
use Session;

class Content extends Model
{
    public static function getContent($url)
    {
        // the  tabel query from datbase $url = url name
        $contents = DB::table('contents as c')
            ->join('menus as m', 'm.id', '=', 'c.menu_id')
            ->where('m.url', '=', $url)
            ->select('c.*', 'm.title')
            ->get()
            ->toArray();
        return $contents;
    }

    public static function save_new($request)
    {

        $content = new self();
        $content->menu_id = $request['menu_id'];
        $content->article = $request['article'];
        $content->ctitle = $request['title'];
        $content->save();
        Session::flash('sm', 'New content saved successfuly');

    }

    public static function update_item($request, $id)
    {

        $content = self::find($id);
        $content->menu_id = $request['menu_id'];
        $content->ctitle = $request['title'];
        $content->article = $request['article'];
        $content->save();
        Session::flash('sm', 'Content updated successfuly');

    }
}
