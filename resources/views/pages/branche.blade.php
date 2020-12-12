@extends('layouts.app')

@section('content')
<section class="unlimited_possibilities" id="about_unlimited_possibilities">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="sub_title">
                    <h2>Наш филиали</h2>
                    <p></p>
                </div>
            </div>
            @foreach ($branches as $branch)
            <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                <div class="single_item single_item_first">
                   <div class="icon_wrapper">
                       <i class="flaticon-university"></i>
                   </div>
                   <div class="blog_title">
                       <h4>{{ $branch->address }}</h4> 
                       <span>{{ $branch->city }}</span><br> 
                       <span>{{ $branch->phone }}</span><br>                   
                   </div>   
               </div>
           </div>   
            @endforeach       
        </div>
    </div>
</section>    
@endsection