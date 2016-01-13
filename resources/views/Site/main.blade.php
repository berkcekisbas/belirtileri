@extends('Site.layout')

@section('content')
        <!--search-->

<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="box">
                    <div class="box-content">
                        <h1 class="tag-title">H1 Başlık Burası</h1>
                        <hr/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin
                            nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum
                            elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus
                            finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo
                            consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis
                            sit amet neque.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pharetra quam sollicitudin
                            nibh aliquam finibus. Etiam efficitur felis vel imperdiet varius. Maecenas bibendum
                            elementum molestie. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris cursus
                            finibus semper. Fusce molestie tincidunt leo vel varius. Nam scelerisque nulla feugiat leo
                            consequat, id dignissim sem tincidunt. Proin elit mauris, hendrerit in varius sed, facilisis
                            sit amet neque.</p>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!--sidebar-->
<div class="sidebar">
    <div class="container">
        <div class="col-md-3">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-list-alt"></span><b>Popüler Kategoriler</b>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <ul class="demo1">
                                @foreach($popular as $item)
                                    <li class="news-item">
                                    <table cellpadding="4">
                                        <tr>
                                            <td>
                                                @if($item->image == "")
                                                    <img src="uploads/nophoto.jpg" width="60" class="img-roundle"/>
                                                @else
                                                    <img src="{{ asset('uploads/'.$item->image) }}" width="60" class="img-roundle"/>
                                                @endif
                                            </td>
                                            <td><a href="http://{{$item->seo.".".config('settings.domain')}}">{{ $item->title }} </a></td>
                                        </tr>
                                    </table>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="well-wrapper col-md-9">
            <div class="middlePage">
                @foreach($contents as $content)
                    <div class="page-header">
                    <div class="panel panel-info">
                        <div class="panel-heading-box">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="resim col-md-5">
                                        @if($content->image == "")
                                            <img src="{{ asset('uploads/nophoto.jpg') }}" alt="">
                                        @else
                                            <img src="{{ asset("uploads/".$content->image) }}" alt="{{ $content->seo }}">
                                        @endif
                                    </div>
                                    <div class="col-md-7 boxed">
                                        <h3>
                                            <a href="http://{{ $content->seo }}.{{ config('settings.domain') }}"> {{ $content->title }}</a>
                                        </h3>
                                        <p>
                                            {{ $content->spot }}

                                        </p>
                                        <div class="post-more pull-right">
                                            <span class="read-more">
                                                <a href="http://{{ $content->seo }}.{{ config('settings.domain') }}" title="Devamını Oku">Devamını Oku <i class="fa fa-arrow-right"></i></a>
                                            </span>
                                        </div>
                                        <div class="post-more pull-right">
                                            <span class="read-more"><i class="fa fa-user"></i> {{ $content->pageview }} kere okundu</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

                <nav class="no-padding col-md-offset-3 col-md-9">
                    {!! $contents->links() !!}
                </nav>
            </div>
        </div>
        <!--footer-->
@endsection