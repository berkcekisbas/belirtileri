<?php

namespace App\Http\Controllers\Site;

use App\Content;
use Illuminate\Http\Request;
use Cache;


use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends BaseController
{
    public function index()
    {
        if(!isset($_GET['page'])) $_GET['page'] =1;

        $contents = Cache::remember('contents-'.$_GET['page'], 60, function()
        {
            return Content::paginate(10);
        });

        return view('Site.main',['contents' => $contents]);
    }

    public function detail($id)
    {
        return $id;
    }
}
