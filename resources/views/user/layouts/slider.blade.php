    <section class="slider_section">
        <div class="slider_area owl-carousel">
            @foreach($sliders as $slider)
            <div class="single_slider d-flex align-items-center" data-bgimg="{{asset($slider->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="slider_content">
                                <h3>{{$slider->heading_one}}</h3>
                                <h1>{{$slider->heading_two}}</h1>
                                <p>{{$slider->heading_three}} </p> 
                                <a class="button" href="{{$slider->button_link}}">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach 
        </div>
    </section>