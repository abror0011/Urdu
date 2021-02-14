@extends('layouts/app')
@section('content')
  <!-- bradcam_area_start  -->
  <div class="bradcam_area breadcam_bg bradcam_overlay">
      <div class="container">
          <div class="row">
              <div class="col-xl-12">
                  <div class="bradcam_text">
                      <h3>Yangiliklar</h3>
                      <p><a href="{{route('home')}}">Bosh sahifa </a></p>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- bradcam_area_end  -->

   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section-padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 posts-list">
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="/storage/{{$news_more->thumb }}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$news_more->title}}</h2>
                     <p class="excert">{{$news_more->content}}</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--================ Blog Area end =================-->


@endsection