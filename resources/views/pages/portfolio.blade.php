@extends('layouts.master')

@section('title' , "{$settings->user->name} | نمونه کارها")

@section('description')
    صفحه نمونه کارها
@endsection

@section('content')

        <div class="content">
            @if($projects->isNotempty())
                        <div class="section mt-0">
                            <h1 class="title title--h1 title__separate">نمونه کارها</h1>
                        </div>
                        <!-- Filter -->
                        <div class="select section">
                            <span class="placeholder">دسته را انتخاب کنید</span>
                            <ul class="filter">
                                <li class="filter__item">Category</li>
                                <li class="filter__item active" data-filter="*"><a class="filter__link active" href="#filter">همه</a></li>
                                @foreach($categories as $category)
                                <li class="filter__item" data-filter=".category-{{ $category->title }}"><a class="filter__link" href="#filter">{{ $category->title }}</a></li>
                                @endforeach
                            </ul>
                            <input type="hidden" name="changemetoo">
                        </div>

                        <!-- Content -->
                        <div class="gallery-grid js-grid js-filter-container" style="position: relative; height: 1975.77px;">
                            <div class="gutter-sizer"></div>
                            <!-- Item 1 -->
                            @foreach ($projects as $project)
                                @if ($project->category)
                                <figure class="gallery-grid__item category-{{ $project->category->title }}" style="position: absolute; left: 0%; top: 0px;">
                                @else
                                <figure class="gallery-grid__item category-unknown" style="position: absolute; left: 0%; top: 0px;">
                                @endif
                                <div class="gallery-grid__image-wrap">
                                    <img class="gallery-grid__image cover medium-zoom-image ls-is-cached lazyloaded" src="{{ $project->thumbnail }}" data-zoom="" alt="">
                                </div>
                                <figcaption class="gallery-grid__caption">
                                    <h4 class="title title--h4 gallery-grid__title">{{ $project->title }}</h4>
                                    <span class="gallery-grid__category">{{ $project->description }}</span>
                                </figcaption>
                            </figure>
                            @endforeach
                        </div>
            @else
                <div class="section mt-0">
                    <h1 class="title title--h1 title__separate">نمونه کارها</h1>
                </div>
                متاسفانه نمونه کاری برای نمایش وجود ندارد:(
            @endif
        </div>
@endsection
