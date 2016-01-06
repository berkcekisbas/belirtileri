<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function getList()
    {
        return view('Admin.Content.list');
    }

    public function getCreate()
    {
        return view('Admin.Content.create');
    }

    public function postCreate()
    {
        return redirect('admin/content/create')->withInput();
    }

}
