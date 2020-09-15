@extends('user.layouts.app')
@section('content') 

<div class="container py-5">
    <!--Section: Content-->
    <section class="text-center">
      <!--Grid row-->
      <div class="row">


		
		










        @foreach ($products as $design)
        <!--Grid column-->
        <div class="col-lg-3 col-md-12 mb-4">
			<!-- Card -->
			<div class="card">
				<!-- Card image -->
			<div class="view overlay">
				<img class="card-img-top" src="{{ asset($design->primary_image) }}"
				alt="Card image cap">
				<a href="#!">
					<div class="mask rgba-white-slight"></div>
				</a>
				</div>
				<!-- Card content -->
				<div class="card-body">
					<p class="mb-1"><a href="" class="font-weight-bold black-text">{{ $design->name }}</a></p>
					<h4 class="mb-1">{{ "$".$design->designPrice }}</h4>
			 <form action="{{ route('selectdesign',[$product->id,$design->id]) }}" method="post">
			  @csrf
              <button type="submit" class="btn btn-black btn-rounded btn-sm px-3">Select this</button> 
			</form>
            </div>
		</div>
          <!-- Card -->
        </div>
        <!--Grid column-->
		@endforeach
	</div>
	<!--Grid row-->
	
</section>
<!--Section: Content-->


  </div>
@endsection