<?php

namespace App\Http\Controllers\Site;

use App\Content;
use App\Layout;
use Illuminate\Http\Request;
use Cache;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function index()
    {
        if(!isset($_GET['page'])) $_GET['page'] =1;

        $contents = Cache::remember('contents-'.$_GET['page'], 60, function()
        {
            $data =  Content::orderBy('id', 'desc')->paginate(5);
            $data->setPath('/');
            return $data;
        });

        return view('Site.main',['contents' => $contents,'popular' => \App\Layout::popular()]);
    }
}
