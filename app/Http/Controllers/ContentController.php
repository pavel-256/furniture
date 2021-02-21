<?php

namespace App\Http\Controllers;

use App\Content;
use App\Http\Requests\ContentRequest;
use Session;

class ContentController extends MainController
{

    public function index()
    {self::$viewData['contents'] = Content::all()->toArray();
        return view('cms.content_index', self::$viewData);

    }

    public function create()
    { // create new content
        return view('cms.content_add', self::$viewData);
    }

    public function store(ContentRequest $request)
    { // save new content
        Content::save_new($request);
        return redirect('cms/content');
    }

    public function show($id)
    { // show the content before delete
        self::$viewData['item_id'] = $id;
        return view('cms.content_delete', self::$viewData);
    }

    // edit content
    public function edit($id)
    {
        self::$viewData['item'] = Content::find($id)->toArray();
        return view('cms.content_edit', self::$viewData);
    }

    public function update(ContentRequest $request, $id)
    {
        Content::update_item($request, $id);
        return redirect('cms/content');
    }

    public function destroy($id)
    {
        Content::destroy($id);

        Session::flash('sm', 'The content have been deleted');

        return redirect('cms/content');

    }
}
