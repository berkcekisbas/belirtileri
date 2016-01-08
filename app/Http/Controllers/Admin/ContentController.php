<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;

class ContentController extends Controller
{
    public function getList()
    {

        /* Ana Sayfa Kısmında Kullanılabilir...

        if(!isset($_GET['page'])) $_GET['page'] =1;

        $contents = Cache::remember('contents-'.$_GET['page'], 60, function()
        {
            //return Content::paginate(2);
        });

        */
        $data = Content::paginate(5);

        return view('Admin.Content.list', ['contents' => $data]);


    }

    public function getCreate()
    {
        return view('Admin.Content.create');
    }

    public function postCreate(Request $request)
    {
        // tags diziye çevriliyor.

        $tags  = explode(",",$request->tags);

        $content = new Content();
        $content->title = $request->title;
        $content->seo = $request->seo;
        $content->spot = $request->spot;
        $content->content = $request->content;
        $content->status = $request->status;
        $content->tags = json_encode($tags);
        $content->save();

        return $content->id;

        //return redirect('admin/content/update')->withInput();
    }

    public function getUpdate(Request $request)
    {
        return json_decode(old('tags'));
    }

}
