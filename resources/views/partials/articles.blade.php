<section class="latest_news_2" id="latest_news_style_2">
    <div class="container">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item">
                   <div class="item_wrapper">
                       <div class="blog-img">
                           <a href="#" title=""><img src="{{ $article->image }}" alt="" class="img-fluid"></a>
                       </div>
                       <h3><a href="{{ route('posts.show', $article->slug)}}">{{ $article->title }}</a></h3> 
                   </div>
                   <div class="blog_title">
                       <ul class="post_bloger">
                           <li><i class="fas fa-user"></i>{{ $article->author }}</li> 
                           <li><i class="fas fa-comment"></i>0 Comments</li>
                       </ul>               
                   </div> 
               </div>
           </div>   
            @endforeach         
        </div>
    </div>
</section>
