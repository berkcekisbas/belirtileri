<?php

namespace App\Http\Controllers\Site;

use App\Layout;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        /* Layout için gerekli veriler. */
        //view()->share('xx','yy');
        //$layout = new Layout();


        //echo $layout->testq();
    }
}
