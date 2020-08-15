@extends('admin.layouts.app')
@section('content')
@include('admin.layouts.header')
<!-- START: Main Content-->
<main>
<div class="container-fluid site-width">

<div class="row">
    <div class="col-12 mt-3">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title float-left">All Sliders</h4>
                <a href="{{route('admin.slider.create')}}"><button class="float-right btn btn-outline-secondary btn sm">Create Slider</button></a>
            </div>
            <div class="card-body"> 
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Actions</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                             @foreach($sliders as $slider)
                                            <tr>
                                                <th scope="row">1</th>
                                                <td><img class="img-fluid" style="width: 100px;" src="{{asset($slider->image)}}"></td>
                                                <td><div class="btn-group" role="group" aria-label="Basic example">

                             <a href="{{route('admin.slider.edit',$slider->id)}}"><button class="btn btn-secondary">Edit</button></a>
                            <form action="{{route('admin.slider.destroy',$slider->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                              </div></td> 
                                            </tr> 
                                             @endforeach  
                                        </tbody>
                                    </table> 
                                </div>
                     
            </div>
        </div>
    </div>
    <!-- END: Card DATA-->
</div>
</div>
</main>
<!-- END: Content-->
@include('admin.layouts.footer')
@endsection