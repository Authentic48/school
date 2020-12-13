<!--========={ Our Instructiors }========-->
<section class="our_instructors" id="instructors_page">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Наша команда</h2>

                </div>
            </div>
            @foreach ($teams as $team)
            <div class="single-wrappe col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="team-single-item">
                    <figure>
                        <div class="member-img">
                            <div class="teachars_pro">
                                <img src="{{ Storage::disk('do_spaces')->url($team->image) }}" alt="member img" class="img-fluid">
                            </div>
                        </div>
                        <figcaption>
                            <div class="member-name">
                                <h4><a href="#" title="">{{ $team->name }}</a></h4>
                                <span>{{ $team->profession }}</span>
                            </div>                            
                        </figcaption>
                    </figure>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>