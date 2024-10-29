@extends('layouts.master')

@section('title' , "{$settings->name} | نمونه کارها")

@section('description')
    صفحه نمونه کارها
@endsection

@section('content')

<div class="content">
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
					<!-- Item 2 -->
					<!-- <figure class="gallery-grid__item category-concept" style="position: absolute; left: 52.029%; top: 0px;">
						<div class="gallery-grid__image-wrap">
                            <img class="gallery-grid__image cover medium-zoom-image ls-is-cached lazyloaded" src="../assets/img/image_02.jpg" data-zoom="" alt="">
						</div>
                        <figcaption class="gallery-grid__caption">
							<h4 class="title title--h4 gallery-grid__title">صورتی فلامینگو</h4>
							<span class="gallery-grid__category">طراحی وب</span>
						</figcaption>
                    </figure> -->

					<!-- Item 3 -->
					<!-- <figure class="gallery-grid__item category-design" style="position: absolute; left: 0%; top: 358.2px;">
						<div class="gallery-grid__image-wrap">
                            <img class="gallery-grid__image cover medium-zoom-image ls-is-cached lazyloaded" src="../assets/img/image_03.jpg" data-zoom="" alt="">
						</div>	
                        <figcaption class="gallery-grid__caption">
							<h4 class="title title--h4 gallery-grid__title">طرح</h4>
							<span class="gallery-grid__category">طراحی</span>
						</figcaption>
                    </figure> -->

					<!-- Item 4 -->
					<!-- <figure class="gallery-grid__item category-design" style="position: absolute; left: 52.029%; top: 506.45px;">
						<div class="gallery-grid__image-wrap">
                            <img class="gallery-grid__image cover medium-zoom-image ls-is-cached lazyloaded" src="../assets/img/image_04.jpg" data-zoom="" alt="">
						</div>
						<figcaption class="gallery-grid__caption">
							<h4 class="title title--h4 gallery-grid__title">طرح بنر</h4>
							<span class="gallery-grid__category">طراحی</span>
						</figcaption>
                    </figure> -->

					<!-- Item 5 -->
					<!-- <figure class="gallery-grid__item category-design" style="position: absolute; left: 52.029%; top: 820.983px;">
						<div class="gallery-grid__image-wrap">
                            <img class="gallery-grid__image cover medium-zoom-image ls-is-cached lazyloaded" src="../assets/img/image_05.jpg" data-zoom="" alt="">
						</div>
						<figcaption class="gallery-grid__caption">
							<h4 class="title title--h4 gallery-grid__title">طرح</h4>
							<span class="gallery-grid__category">طراحی</span>
						</figcaption>
                    </figure> -->

					<!-- Item 6 -->
					<!-- <figure class="gallery-grid__item category-life" style="position: absolute; left: 0%; top: 946.9px;">
						<div class="gallery-grid__image-wrap">
                            <img class="gallery-grid__image cover medium-zoom-image ls-is-cached lazyloaded" src="../assets/img/image_06.jpg" data-zoom="" alt="">
						</div>
						<figcaption class="gallery-grid__caption">
							<h4 class="title title--h4 gallery-grid__title">طلایی</h4>
							<span class="gallery-grid__category">زندگی</span>
						</figcaption>
                    </figure> -->

					<!-- Item 7 -->
					<!-- <figure class="gallery-grid__item category-concept" style="position: absolute; left: 52.029%; top: 1135.52px;">
						<div class="gallery-grid__image-wrap">
                            <img class="gallery-grid__image cover medium-zoom-image ls-is-cached lazyloaded" src="../assets/img/image_07.jpg" data-zoom="" alt="">
						</div>
						<figcaption class="gallery-grid__caption">
							<h4 class="title title--h4 gallery-grid__title">هلو</h4>
							<span class="gallery-grid__category">طراحی وب</span>
						</figcaption>
                    </figure> -->

					<!-- Item 8 -->
					<!-- <figure class="gallery-grid__item category-design" style="position: absolute; left: 0%; top: 1475.83px;">
						<div class="gallery-grid__image-wrap">
                            <img class="gallery-grid__image cover medium-zoom-image ls-is-cached lazyloaded" src="../assets/img/image_08.jpg" data-zoom="" alt="">
						</div>
						<figcaption class="gallery-grid__caption">
							<h4 class="title title--h4 gallery-grid__title">متن ساختگی</h4>
							<span class="gallery-grid__category">طراحی</span>
						</figcaption>
                    </figure> -->

					<!-- Item 9 -->
					<!-- <figure class="gallery-grid__item category-life" style="position: absolute; left: 52.029%; top: 1480.75px;">
						<div class="gallery-grid__image-wrap">
                            <img class="gallery-grid__image cover medium-zoom-image ls-is-cached lazyloaded" src="../assets/img/image_09.jpg" data-zoom="" alt="">
						</div>
						<figcaption class="gallery-grid__caption">
							<h4 class="title title--h4 gallery-grid__title">متن ساختگی</h4>
							<span class="gallery-grid__category">زندگی</span>
						</figcaption>
                    </figure> -->
				</div>
			</div>
@endsection