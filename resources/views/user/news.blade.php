@extends('layouts/app')
@section('content')
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg bradcam_overlay">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Yangiliklar</h3>
                        <p><a href="{{route('home')}}">Bosh sahifa</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach ($news as $new)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="storage/{{$new->thumb}}" alt="">
                                    <a href="{{route('news_more', $new->id)}}" class="blog_item_date    ">
                                        <h3 class="">{{$new->created_at->format('d')}}</h3>
                                        <p>{{$new->created_at->format('M')}}</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{route('news_more', $new->id)}}">
                                        <h2>{{$new->title}}</h2>
                                    </a>
                                    {{-- <p>{{$new->content}}</p> --}}
                                </div>
                                {{-- <a class="button rounded-0 mt-3 mb-3 primary-bg text-white btn_1 boxed-btn" href="{{route('news_more', $new->id)}}">Batafsil</a> --}}
                                {{-- <form method="GET" action="{{route('news_more', $new->id)}}">
                                    <button class="button rounded-0 mb-3 primary-bg text-white btn_1 boxed-btn"
                                       type="submit">Batafsil</button>
                                 </form> --}}
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection