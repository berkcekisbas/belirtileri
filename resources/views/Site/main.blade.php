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
</div></div>
<!--sidebar-->
<div class="sidebar">
    <div class="container">
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
        <div class="well-wrapper col-md-9">
            @foreach($contents as $content)
                <div class="box-wrapper">
                <div class="pic no-padding col-md-4">
                    @if($content->image == null)
                        <img src="{{ asset('uploads/nophoto.jpg') }}" alt="">
                    @else
                        <img src="{{ asset('uploads/'.$content->image) }}" alt="">
                    @endif
                </div>
                <div class="detay col-md-8">
                    <h2><a href="detay.php"> Baş Ağrısı Belirtileri</a></h2>

                    <p>İnsanoğlu yaşamı boyunca birçok hastalığın tehdidi altında kalıyor. Bazı
                        hastalıklar yaş ilerledikçe kaçınılmaz oluyor. Kalp, şeker, tansiyon derken ömürler geçiyor. Bir de
                        hiç
                        ummadığımız anda ortaya çıkan tedavisi mümkün olmayan ve hayatı kabus haline getirebilen hastalıklar
                        var.
                        Halk arasında “aft” olarak bilinen, bir diğer adı “ağız ülseri” olan ağız içi yaraları aslında bir
                        doku
                        bozukluğudur. Bu doku bozukluğunun tam anlamıyla nedeni bilinmemekle birlikte farklı kaynakları
                        olabileceği bilinmektedir. Halk arasında “aft” olarak bilinen, bir diğer adı “ağız ülseri” olan ağız
                        içi yaraları aslında bir doku
                        bozukluğudur.</p>

                    <div class="post-more pull-right">
                        <span class="read-more">
                            <a href="detay.php" title="Devamını Oku">Devamını Oku <i class="fa fa-arrow-right"></i></a>
                        </span>
                    </div>
                    <div class="post-more pull-right">
                        <span class="read-more">
                                <i class="fa fa-user"></i> {{ $content->pageview }} kere okundu</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <nav class="no-padding col-md-offset-3 col-md-9">
            {!! $contents->links() !!}
        </nav>

    </div>
</div>
@endsection