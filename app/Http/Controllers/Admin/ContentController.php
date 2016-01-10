<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Cache;
use Validator;
use Illuminate\Support\Facades\Config;

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

        $data = Content::paginate(config('settings.content_list_number_of_element'));

        return view('Admin.Content.list', ['contents' => $data]);


    }

    public function getCreate()
    {
        return view('Admin.Content.create');
    }

    public function postCreate(Request $request)
    {

        $validator = Validator::make($request->all(),Content::$rules,Content::$messages);

        if ($validator->fails()) {
            return redirect('admin/content/create')->withErrors($validator)->withInput();
        }


        /* bu validate kontrolü ile return kullanmadan postun gönderildiği sayfaya dönülebilir. Bu Şekilde de kullanılabilir.
        $this->validate($request, Content::$rules,Content::$messages)->withInput();
        */


        // tags diziye çevriliyor.

        $tags  = explode(",",$request->tags);

        $content = new Content();
        $content->title = $request->title;
        $content->seo = $request->seo;
        $content->spot = $request->spot;
        $content->content = $request->content;
        $content->status = $request->status;
        $content->tags = json_encode($tags);
        $content->description = $request->description;

        $content->save();


        return redirect('admin/content/list')->with('success','İçeirk Başarıyla Eklendi');
    }

    public function getUpdate(Request $request)
    {
        return json_decode(old('tags'));
    }

    public function getDelete($id)
    {
        Content::where('id',$id)->delete();
        return redirect('admin/content/list')->with('success','İçeirk Başarıyla Silindi');
    }

    public function getActive(Request $request)
    {
        return "Active Ok ".$request;
    }

}
