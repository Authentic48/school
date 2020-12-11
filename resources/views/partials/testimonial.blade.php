<section class="testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                <div class="testimonial_title">
                    <h2>Студент говорит о нас</h2>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                <div class="testimonial_text_wrapper">
                    <div class="carousel_text slider-for">
                      @foreach ($reviews as $review)
                      <div>
                        <div class="single_box wow fadeInUp" data-wow-duration="2s" data-wow-delay=".{{ $review->id }}s">
                            <p>{!! $review->description !!}</p>
                        </div>
                    </div>
                      @endforeach
                    </div> 
                    <div class="reviewer_info">
                        <div class="carousel_images slider-nav">
                         @foreach ($reviews as $review)
                         <div class="restimonial_single_img">
                            <img src="{{ Storage::disk('do_spaces')->url($review->image) }}" alt="{{ $review->id }}" class="img-fluid">
                            <div class="name_position">
                                <span class="name">{{ $review->name }}</span>
                                <span>{{ $review->profession }}</span>
                            </div>
                        </div>
                         @endforeach                                       
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section><!-- End Testimonial -->
