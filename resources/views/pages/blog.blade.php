@extends('layouts.master')

@section('title' , 'علیرضا وحدانی | وبلاگ')

@section('description')
    این صفحه رزومه منه ، در کل در مورد تحصیلات ، تجربیات و مهارت هایی که دارم صحبت شده
@endsection

@section('content')
    <div class="content">
        <div class="section mt-0">
            <h1 class="title title--h1 title__separate"> وبلاگ</h1>
        </div>

        <!-- News -->
        <div class="news-grid section">
            <!-- Post -->
            @foreach($posts as $post)
            <article class="news-item box">
                <div class="news-item__image-wrap overlay overlay--45">
                    <div class="news-item__date">{{ verta($post->created_at)->format('d')}}<span>{{ verta($post->created_at)->formatword('M')}}</span></div>
                    <a class="news-item__link" href="{{ route('blog.single',$post->id)}}"></a>
                    <img class="cover ls-is-cached lazyloaded" src="{{  url($post->thumbnail) }}" alt="">
                </div>
                <div class="news-item__caption">
                    <h3 class="title title--h3">{{$post->title}}</h3>
                    <p>{{Str::limit(html_entity_decode(strip_tags($post->content,30)))}}</p>
                </div>
            </article>
            @endforeach
        </div>
        <div class="custom-pagination-container" style="display: flex; margin-top: 2rem">
            {{ $posts->links() }}
        </div>
@endsection
