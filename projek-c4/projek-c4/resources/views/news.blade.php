@extends('layouts.main')
@section('container')
 <h1>Halaman News</h1>
 @foreach ($news as $news_posts)
   <article class="mb-5">
     <h4>{{$news_posts["judulberita"]}}</h4>
     <h6>By:{{$news_posts["penulis"]}}</h6>
     <p>{{$news_posts["isiberita"]}}</p>
 </article>
 @endforeach
@endsection
