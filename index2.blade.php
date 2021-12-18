<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="СНТ Цементник рядом с г. Липецком">
    <link type="image/x-icon" rel="shortcut icon" href="{{asset('favicon.png')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}?version=10">

    <title>СНТ Цементник</title>
</head>
<body>
@include('partials.header')
<div class="news-item">
    <div class="wrapper">
        <div class="news-section1">
            <h2 class="heading">ОБЪЯВЛЕНИЯ</h2>
            <div class="news-articles">
                @foreach($notices as $n)
                    <div class="news-article elem1">
                        <h4>{{$n->title}}</h4>
                    </div>
                    <div class="news-article elem2">
                        {!! $n->content !!}
                    </div>
                    <div class="news-article elem3">
                        <a href="{{route('notices.show', ['slug' => $n->slug])}}">Читать</a>
                    </div>
                @endforeach
            </div>
			
            <a href="{{route('notices')}}">Читать все объявления</a>
            
            <div style="height: 100px;"></div>
            
            <h2 class="heading">НОВОСТИ</h2>
            <div class="news-articles">
                @foreach($news as $n)
                    <div class="news-article elem1">
                        <h4>{{$n->title}}</h4>
                    </div>
                    <div class="news-article elem2">
                        {!! $n->content !!}
                    </div>
                    <div class="news-article elem3">
                        <div class="date">{{$n->date}}</div>
                        <a href="{{route('news.show', ['slug' => $n->slug])}}">Читать</a>
                    </div>
                @endforeach
            </div>

            <a href="{{route('news')}}">Читать все новости</a>
        </div>
        <div class="news-section2">
            @include('partials.water_schedule')
            @include('partials.weather')
        </div>
    </div>
</div>

<div class="gallery">
    <div class="wrapper">
        <h2>ФОТОГАЛЕРЕЯ</h2>
        <div class="photos">
            <img src="{{asset('images/photo-1.png')}}" alt="Photo 1">
            <img src="{{asset('images/photo-2.png')}}" alt="Photo 2">
            <img src="{{asset('images/photo-3.png')}}" alt="Photo 3">
            <img src="{{asset('images/photo-4.png')}}" alt="Photo 4">
        </div>
    </div>
</div>
@include('partials.footer')
</body>
</html>
