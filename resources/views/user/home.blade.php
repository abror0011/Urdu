@extends('layouts.app')
@section('content')
        <!-- slider_area_start -->
        <div class="slider_area">
            <div class="slider_active owl-carousel">
                <div class="single_slider  d-flex align-items-center slider_bg_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slider_text ">
                                    <h3> <span>Sport</span> <br>
                                        Sog'lik garovi </h3>
                                    <p>Urganch davlat universiteti Jismoniy madaniyat fakulteti talabalari <br> uchun “Talaba – salomatlik va sport elchisi” loyihasi
                                       </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_slider  d-flex align-items-center slider_bg_1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slider_text ">
                                    <h3> <span>Sport</span> <br>
                                        Tinchlik elchisi </h3>
                                        <p>Urganch davlat universiteti Jismoniy madaniyat fakulteti talabalari <br> uchun “Talaba – salomatlik va sport elchisi” loyihasi
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_slider  d-flex align-items-center slider_bg_2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="slider_text ">
                                    <h3> <span>Sport</span> <br>
                                        bizni birlashtiradi </h3>
                                        <p>Urganch davlat universiteti Jismoniy madaniyat fakulteti talabalari <br> uchun “Talaba – salomatlik va sport elchisi” loyihasi
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider_area_end -->
        
        <!-- service_area_start -->
        <div class="service_area">
            <div class="container p-0">
                <div class="row no-gutters">
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service">
                            
                            <h3>FUTBOL</h3>
                            <p>Oʻzbekistonda 20-asr boshlaridan zamonaviy Futbol qoidalari asosida oʻyinlar oʻtkazilgan. 1912-yilda Qoʻqonda birinchi Futbol jamoasi tuzildi.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service">
                            
                            <h3>Voleybol</h3>
                            <p>Voleybol Oʻzbekistonda 1920 yildan oʻynaladi. Oʻzbekiston Respublikasi 1991 yil Xalqaro Voleybol federatsiyasiga, 1992 yil Osiyo Voleybol konfederatsiyasiga aʼzo boʻlib kirdi.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service">
                            
                            <h3>Basketbol</h3>
                            <p>Basketbol Oʻzbekistonda 1921 yildan oʻynala boshlagan. Oʻzbekistonlik R.Salimova 2 marta jahon hamda olimpiya oʻyinlari chempioni boʻlgan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- service_area_end -->
    
        <!-- welcome_docmed_area_start -->
        {{-- <div class="welcome_docmed_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="welcome_thumb">
                            <div class="thumb_1">
                                <img src="user/img/about/1.png" alt="">
                            </div>
                            <div class="thumb_2">
                                <img src="user/img/about/2.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="welcome_docmed_info">
                            <h2>Welcome to Docmed</h2>
                            <h3>Best Care For Your <br>
                                    Good Health</h3>
                            <p>Esteem spirit temper too say adieus who direct esteem.
                                    It esteems luckily or picture placing drawing. Apartments frequently or motionless on reasonable projecting expression.</p>
                            <ul>
                                <li> <i class="flaticon-right"></i> Apartments frequently or motionless. </li>
                                <li> <i class="flaticon-right"></i> Duis aute irure dolor in reprehenderit in voluptate.</li>
                                <li> <i class="flaticon-right"></i> Voluptatem quia voluptas sit aspernatur. </li>
                            </ul>
                            <a href="#" class="boxed-btn3-white-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- welcome_docmed_area_end -->
    
        <!-- offers_area_start -->
        <div class="our_department_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title text-center mb-55">
                            <h3>Amaliyotlar</h3>
                            <p>Bu yerda talabalar qilgan amaliyotlari ko'rib borishingiz mumkin. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($amaliyot as $item)
                    
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="single_department">
                            <div class="department_thumb">
                                <img src="/storage/{{$item->images->thumb}}" alt="">
                            </div>
                            <div class="department_content">
                                <h3><a href="#">{{ $item->title }}</a></h3>
                                {{-- <a href="#" class="learn_more">Learn More</a> --}}
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                </div>
                <nav class="pagination float-right justify-content-center d-flex">
                    {{ $amaliyot->links()}}
                </nav>
            </div>
            
        </div>
        
        <!-- offers_area_end -->
    
        <!-- testmonial_area_start -->
        <div class="testmonial_area">
            <div class="testmonial_active owl-carousel">
                <div class="single-testmonial testmonial_bg_1 overlay2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="testmonial_info text-center">
                                    <div class="quote">
                                        <i class="flaticon-straight-quotes"></i>
                                    </div>
                                    <p>Jismoniy mashqlar ko'plab dori-darmonlarning o'rnini bosa olmaydi, ammo dunyoda <br> biron bir dori jismoniy mashqlar o'rnini bosa olmaydi.<br>
                                       </p>
                                    <div class="testmonial_author">
                                        <h4>Anjelo Mosso</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testmonial testmonial_bg_2 overlay2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="testmonial_info text-center">
                                    <div class="quote">
                                        <i class="flaticon-straight-quotes"></i>
                                    </div>
                                    <p> Jismoniy tarbiya va sportni ommaviy rivojlantirishda men inson salomatligi, uning ijodiy faoliyati va uzoq umr ko'rish uchun kurashning eng yaxshi variantlaridan birini ko'raman.</p>
                                    <div class="testmonial_author">
                                        <h4>Piter Anoxin</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-testmonial testmonial_bg_1 overlay2">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-10 offset-xl-1">
                                <div class="testmonial_info text-center">
                                    <div class="quote">
                                        <i class="flaticon-straight-quotes"></i>
                                    </div>
                                    <p>Yurish va suzishdan keyin men o'zimni yoshartirayotganimni, eng muhimi, tana harakatlari bilan miyamni massaj qilganim va tetiklashtirganimni his qilaman.</p>
                                    <div class="testmonial_author">
                                        <h4>Konstantin Tsiolkovskiy</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- testmonial_area_end -->
    
        <!-- business_expert_area_start  -->
       
        <!-- business_expert_area_end  -->
    
    
        <!-- expert_doctors_area_start -->
        <div class="expert_doctors_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="doctors_title mb-55">
                            <h3>Mualliflar</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="expert_active owl-carousel">
                            <div class="single_expert">
                                <div class="expert_thumb">
                                    <img src="user/img/experts/1.jpg" alt="">
                                </div>
                                <div class="experts_name text-center">
                                    <h3>Ko’palov Sanjar Ulug’bekovich</h3>
                                    <span>Urganch davlat universiteti Jismoniy madaniyat fakulteti dekani, Pedagokika fanlari nomzodi, dotsent</span>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="expert_thumb">
                                    <img src="user/img/experts/2.jpg" alt="">
                                </div>
                                <div class="experts_name text-center">
                                    <h3>Meyliyev Xusin </h3>
                                    <span>Urganch davlat universiteti, kata o’qituvchi </span>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="expert_thumb">
                                    <img src="user/img/experts/3.jpg" alt="">
                                </div>
                                <div class="experts_name text-center">
                                    <h3>Sharipov Allabergan Kamilovich</h3>
                                    <span>Urganch davlat universiteti, Pedagokika fanlari nomzodi, dotsent</span>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="expert_thumb">
                                    <img src="user/img/experts/4.jpg" alt="">
                                </div>
                                <div class="experts_name text-center">
                                    <h3>Sharipova Dilara Djumaniyazovna</h3>
                                    <span>Toshkent davlat pedagogika universiteti, Pedagogika fanlari doktri, professor</span>
                                </div>
                            </div>
                            <div class="single_expert">
                                <div class="expert_thumb">
                                    <img src="user/img/experts/5.jpg" alt="">
                                </div>
                                <div class="experts_name text-center">
                                    <h3>Yaqubova Dono Baxodirovna</h3>
                                    <span>Urganch davlat universiteti, o’qituvchi</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- expert_doctors_area_end -->
    
        <!-- Emergency_contact start -->
       
        <!-- Emergency_contact end -->
@endsection