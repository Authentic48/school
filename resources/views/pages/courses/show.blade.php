@extends('layouts.app')

@section('content')
<section class="blog_wrapper" id="courses_details_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                <div class="courses_details">
                    <div class="single-curses-contert">
                        <div class="details-img-bxo">
                            <img src="{{ Storage::disk('do_spaces')->url($course->image) }}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="courses_tab_wrapper">
                        <!-- Tab panes -->
                        <div class="tab_contents tab-content">
                            <div role="tabpanel" class="tab-pane fade in active show" id="information">
                                <p>{!! $course->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-12 col-md-4 col-lg-4 blog_wrapper_right ">
                <div class="blog-right-items">
                    <div class="courses_features widget_single">
                        <div class="items-title">
                            <h3 class="title">{{ $course->title }}</h3>
                        </div>
                        <div class="features_items">
                            <ul class="list-unstyled">
                                <li><span>Уровень:  {{ $course->level }}</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="recent_post_wrapper popular_courses_post widget_single">
                        <div class="items-title">
                            <h3 class="title">Наши популярные курсы</h3>
                        </div>
                       @foreach ($courses as $course)
                       <div class="single-post">
                        <div class="recent_img">
                             <a href="{{ $course->title }}"><img src="{{ Storage::disk('do_spaces')->url($course->image) }}" alt="" class="img-fluid"></a>
                        </div>
                        <div class="post_title">
                            <a href="{{ route('courses.show', $course->slug) }}">{{ $course->title }}</a>
                        </div>
                    </div>
                       @endforeach
                    </div>
                </div>
            </div>
</section>

@include('partials.application')

@endsection