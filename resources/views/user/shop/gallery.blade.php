@extends('user.layouts.app')
@section('content') 
  <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">   
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <h3>Gallery</h3>
                        <ul>
                            <li><a href="index.html">home</a></li>
                            <li>gallery</li>
                        </ul> 
                    </div>
                </div>
            </div>
        </div>         
    </div>
    <!--breadcrumbs area end-->
    
  

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
            </div>   
    </section>
    <!--about section end-->
 
	@endsection