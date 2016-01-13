<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
class Layout
{
  public static function popular()
  {
      $populardata = Cache::remember('popular', 60, function() {

          $data = Content::take(15)->orderBy('pageview', 'desc')->get();
          return $data;

      });

      return $populardata;
  }
}
