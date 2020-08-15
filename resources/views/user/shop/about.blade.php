@extends('user.layouts.app')
@section('content') 
  <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>About Us</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>about us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
    <!--about section area -->
    <section class="about_section pb-2"> 
       <div class="container">
            <div class="row">
                <div class="col-12">
                   <figure>
                        <div class="about_thumb">
                            <img src="{{asset('user/img/about/about1.jpg')}} " alt="">
                        </div>
                        <figcaption class="about_content">
                            <h1>We are a digital agency focused on delivering content and utility user-experiences.</h1>
                            <p>Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet cursus odio tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel nunc taciti integer cras. Hac pede dis, praesent nibh ac dui mauris sit. Pellentesque mi, facilisi mauris, elit sociis leo sodales accumsan. Iaculis ac fringilla torquent lorem consectetuer, sociosqu phasellus risus urna aliquam, ornare.</p>
                            <div class="about_signature">
                                <img src="assets/img/about/about-us-signature.png" alt="">
                            </div>
                        </figcaption>
                    </figure>
                </div>    
            </div>  
        </div> 
    </section>
    <!--about section end-->  

    <!--about section area -->
    <section class="about_section py-2 "> 
       <div class="container">
            <div class="row">
                           <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{asset('user/img/about/about2.jpg')}}" alt="">
                                </div> 
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{asset('user/img/about/about3.jpg')}}" alt="">
                                </div> 
                            </figure>
                        </article>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <article class="single_gallery_section">
                            <figure>
                                <div class="gallery_thumb">
                                    <img src="{{asset('user/img/about/about4.jpg')}}" alt="">
                                </div> 
                            </figure>
                        </article>
                    </div>
                </div> 
                <div class="col-12">
                   <figure> 
                        <figcaption class="about_content">
                            <h1>Our Motivation</h1>
                            <p>Adipiscing lacus ut elementum, nec duis, tempor litora turpis dapibus. Imperdiet cursus odio tortor in elementum. Egestas nunc eleifend feugiat lectus laoreet, vel nunc taciti integer cras. Hac pede dis, praesent nibh ac dui mauris sit. Pellentesque mi, facilisi mauris, elit sociis leo sodales accumsan. Iaculis ac fringilla torquent lorem consectetuer, sociosqu phasellus risus urna aliquam, ornare.</p>
                            <div class="about_signature">
                                <img src="assets/img/about/about-us-signature.png" alt="">
                            </div>
                        </figcaption>
                    </figure>
                </div>    
            </div>   
    </section> 
	@endsection