<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $table = 'contents';

    public static $messages = array(
    'title.required'       => 'Lütfen Bir Başlık girin !',
    'seo.required'         => 'Lütfen Seo Url Girin !',
    'seo.unique'           => 'Bu Başlıklı İçerik Zaten Mevcut !',
    'spot.required'        => 'Lütfen Spot İçerik !',
    'content.required'     => 'Lütfen İçerik Girin !',
    'status.required'      => 'Lütfen Durum Bilgisi Girin !',
    'tags.required'        => 'Lütfen Etikletleri Girin',
    'description.required' => 'Lütfen Description Girin !',
    'image.mimes'          => 'Lütfen Geçerli Bir Resim Ekleyin !',
    //'image.required'       => 'Lütfen Description Girin !',
    'image.max'            => 'Resim Büyüklüğü 2.5 Mb ı Geçemez !',
    );

    public static $rules = array(
    'title'       => 'required',
    'seo'         => 'required|unique:contents',
    'spot'        => 'required',
    'content'     => 'required',
    'status'      => 'required',
    'tags'        => 'required',
    'description' => 'required',
    'image' => 'mimes:jpeg,jpeg,png|max:2500'
    );

}
