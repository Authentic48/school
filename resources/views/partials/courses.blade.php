<section class="popular_courses" id="popular_courses_page">
    <div class="container"> 
        <div class="row">
            @foreach ($courses as $course)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="single-courses">
                    <div class="courses_banner_wrapper">
                        <div class="courses_banner"><a href="{{ route('courses.show', $course->slug) }}"><img src="{{ Storage::disk('do_spaces')->url($course->image) }}" alt="{{ $course->name }}" class="img-fluid"></a></div>
                    </div>
                    <div class="courses_info_wrapper">
                        <div class="courses_title">
                            <h3><a href="{{ route('courses.show', $course->slug) }}">{{ $course->title }}</a></h3>
                            <div class="teachers_name">{{ $course->level }}</div>
                        </div>
                        <div class="courses_info">
                            <ul class="list-unstyled">
                                <li><i class="fas fa-calendar-alt"></i>{{ $course->duration }}</li>
                                <li><i class="fas fa-book"></i>{{ $course->book }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach                                    
        </div>
    </div>
</section>
