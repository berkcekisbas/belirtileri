@extends('Site.layout')

@section('content')
    <div id="main" class="">
        <div class="container">
            <h1>{{ $content->title }}</h1>

            <div class="main-wrapper col-md-9">
                {!! $content->content !!}

                <p class="tags"><i class="fa fa-tags"></i>
                    @foreach(json_decode($content->tags) as $tag)
                        <a href="#" rel="tag">{{ $tag }}</a>,
                    @endforeach
                </p>
                <div class="post-entries">
                    <div class="nav-prev fl">
                        <a href="#" rel="prev"><i class="fa fa-angle-left"></i> Önceki Konuya Git</a></div>
                    <div class="nav-next fr">
                        <a href="#" rel="next">Sonraki Konuya Git <i class="fa fa-angle-right"></i></a></div>
                    <div class="fix"></div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span class="glyphicon glyphicon-list-alt"></span><b>Popüler Kategoriler</b></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <ul class="demo1">
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td><img src="img/kategori-1.jpg" width="60" class="img-roundle"/></td>
                                                <td><a href="#">Kanser Belirtileri </a></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td><img src="img/kategori-1.jpg" width="60" class="img-roundle"/></td>
                                                <td><a href="#">Migren Belirtileri </a></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td><img src="img/karaciger-yaglanmasina-ne-iyi-gelir1-150x150.jpg"
                                                         width="60" class="img-roundle"/></td>
                                                <td><a href="#">Obezite Belirtileri </a></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td><img src="img/kategori-1.jpg" width="60" class="img-roundle"/></td>
                                                <td><a href="#">Şeker Belirtileri </a></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td><img src="img/kategori-1.jpg" width="60" class="img-roundle"/></td>
                                                <td><a href="#">Kanser Belirtileri </a></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td><img src="img/kategori-1.jpg" width="60" class="img-roundle"/></td>
                                                <td><a href="#">Kanser Belirtileri </a></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td><img src="img/kategori-1.jpg" width="60" class="img-roundle"/></td>
                                                <td><a href="#">Kanser Belirtileri </a></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td><img src="img/kategori-1.jpg" width="60" class="img-roundle"/></td>
                                                <td><a href="#">Kanser Belirtileri </a></td>
                                            </tr>
                                        </table>
                                    </li>
                                    <li class="news-item">
                                        <table cellpadding="4">
                                            <tr>
                                                <td><img src="img/kategori-1.jpg" width="60" class="img-roundle"/></td>
                                                <td><a href="#">Kanser Belirtileri </a></td>
                                            </tr>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection