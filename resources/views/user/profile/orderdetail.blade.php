@extends('user.layouts.app')
@section('content')
<div class="container-fluid  content-grid">

<div class="row-fluid">                        
<div class="span16  breadcrumbs-grid">
<div id="breadcrumbs_26">
<div class="ty-breadcrumbs clearfix">
<span href="" class="ty-breadcrumbs__a">Home</span><span class="ty-breadcrumbs__slash">/</span><span href="" class="ty-breadcrumbs__a">Orders</span><span class="ty-breadcrumbs__slash">/</span><span class="ty-breadcrumbs__current"><bdi>Order information</bdi></span>
</div>
<!--breadcrumbs_26--></div>
</div>
</div>
<div class="row-fluid">                        <div class="span16  main-content-grid">
<div class="ty-mainbox-container clearfix">

<h1 class="ty-mainbox-title">
 
 
<span><h3 class="ty-subheader">Order&nbsp;#{{ $order->order_number }}</h3></span>
<span><h3 class="ty-subheader"> ({{ date('l jS \of F Y h:i A', strtotime($order->created_at))}})</h3></span>
{{-- <em class="ty-status">Status:
UnPaid</em> --}}

</h1>
	
	@php
//  dd($order->pivot->design_price);
@endphp
<div class="ty-mainbox-body"><div class="ty-orders-detail">

 
<!-- Inline script moved to the bottom of the page -->
<div class="ty-tabs cm-j-tabs clearfix">
<ul class="ty-tabs__list">
<li id="general" class="ty-tabs__item cm-js active"><a class="ty-tabs__a mb-3">General</a></li>
</ul>
</div>
<div class="cm-tabs-content ty-tabs__content clearfix" id="tabs_content">
<div id="content_general" class="">

<div class="ty-orders-detail__products orders-product">
<div>
<div class="ty-subheaders-group">
	<table class="ty-orders-detail__table ty-table">
		
		<thead>
			<tr>
				<th class="ty-orders-detail__table-product">Product</th>
				<th class="ty-orders-detail__table-product">Design</th>
				<th class="ty-orders-detail__table-quantity">Size</th>
				<th class="ty-orders-detail__table-quantity">Color</th>
				<th class="ty-orders-detail__table-price">Design Price</th>
				<th class="ty-orders-detail__table-price">Price</th>
				<th class="ty-orders-detail__table-quantity">Quantity</th>
				<th class="ty-orders-detail__table-subtotal">Subtotal</th>
			</tr>
		</thead>
		
		@foreach($order->products as $product)  
		<tbody>
            <tr class="ty-valign-top">
			<td>
				<div class="clearfix">
					<div class="ty-float-left ty-orders-detail__table-image">
						
					 <img class="ty-pict cm-image" style="max-width: 100px" src="{{ asset($product->primary_image) }}">
						 
					</div> 
					<div class="ty-overflow-hidden ty-orders-detail__table-description-wrapper">
						<div class="ty-ml-s ty-orders-detail__table-description">
							<a>{{ $product->name }}
						<a>        
							</div>
						</div>
					</div>
				</td> 
			<td>
				<div class="clearfix">
					<div class="ty-float-left ty-orders-detail__table-image">
					@if(isset($product->pivot->design_price))
					<img class="ty-pict cm-image" style="max-width: 100px" src="{{ asset($order->design($product->pivot->design_id)->primary_image) }}">
					@else
					<div class="ty-ml-s ty-orders-detail__table-description">
						<a>Without Design
					<a>        
						</div>	
					@endif
						 
					</div>  
					</div>
				</td> 
				@php
				$p_price = 	$product->pivot->price - $product->pivot->design_price;
				@endphp
				<td class="ty-center"><bdi>{{ $product->pivot->size}}</bdi></td>
				<td class="ty-center"><bdi>{{ $product->pivot->color}}</bdi></td>
				@if ($product->pivot->design_price !== null)
				<td class="ty-center"><bdi><span>$</span>{{ $product->pivot->design_price }}</bdi></td>
				@else
				<td>
				<div class="ty-ml-s ty-orders-detail__table-description">
					<a>_
				<a>        
					</div>
				</td>	
				@endif
				@if ($product->pivot->design_price !== null)
				<td class="ty-center"><bdi><span>$</span>{{ $product->product_price($product->pivot->design_price,$product->pivot->price) ?? $product->pivot->price  }}</bdi></td
				@else
				><td class="ty-center"><bdi><span>$</span>{{ $product->pivot->price  }}</bdi></td>

				@endif
				<td class="ty-center d-none">{{ $product->pivot->qty ?? "" }}</td>
				<td class="ty-center">{{ $product->pivot->qty ?? "" }}</td>
				<td class="ty-center">&nbsp;<bdi><span>$</span>{{ $product->pivot->price }}</bdi></td>
			</tr>
					
					
					
					
        </tbody>
            @endforeach
            </table>
				
				
				<div class="ty-orders-summary clearfix">
					<h3 class="ty-subheader">
					Summary
					</h3>
					<div class="ty-orders-summary__right">
						
					</div>
					<div class="ty-orders-summary__wrapper">
						<table class="ty-orders-summary__table">
							
							<tbody><tr class="ty-orders-summary__row">
								<td>Total Qty:&nbsp;</td>
								<td width="57%" data-ct-orders-summary="summary-weight">{{ $order->total_qty }}</td>
							</tr>
							<tr class="ty-orders-summary__row">
								<td>Status:</td>
								<td style="width: 57%" data-ct-orders-summary="summary-payment">
									
									{{ $order->status }}
								</td>
							</tr>   
							
							<tr class="ty-orders-summary__row">
								<td class="ty-orders-summary__total">Total:&nbsp;</td>

								<td class="ty-orders-summary__total" data-ct-orders-summary="summary-total">
									<bdi>
										<span>${{$order->total_price }}
										</span>&nbsp;
									</bdi>
								</td>
							</tr> 
					   </tbody></table>
					</div>
			      </div>
			   </div>
			</div>
		</div>
		</div><!-- main order info -->
		
		<div id="content_order_history" class="hidden">
			<div class="ty-pagination-container cm-pagination-container" id="order_history_content">
				<table width="100%" class="table ty-table">
					<thead>
						<tr>
							<th align="left" width="20%">Date</th>
							<th align="left" width="80%">Action</th>
						</tr></thead>
						<tbody><tr>
							<td colspan="2"><p class="no-items">No data found, please report to manager</p></td>
						</tr>
					</tbody></table>
					<!--order_history_content--></div>
					<!--content_order_history--></div>
				</div>
			</div>
			<div class="orders-customer">
				<h3 class="ty-subheader">
				Customer information
                </h3>  
				<div id="tygh_order_shipping_adress" class="ty-profiles-info__item ty-profiles-info__shipping">
					<h5 class="ty-profiles-info__title">Shipping address</h5>
					<div class="ty-profiles-info__field">                <div class="ty-info-field s-firstname">
						<bdi>{{ $order->address->name }}</bdi>
					</div>
					<div class="ty-info-field s-phone">
						<bdi>{{ $order->address->phone }}</bdi>
					</div>
					<div class="ty-info-field s-address">
						<bdi>{{ $order->address->address }}</bdi>
					</div> 
					<div class="ty-info-field s-city">
						<bdi>{{ $order->address->city }}</bdi>
					</div>
					<div class="ty-info-field s-state">
						<bdi>{{ $order->address->state }}</bdi>
					</div>
					<div class="ty-info-field s-zipcode">
						<bdi>{{ $order->address->pin }}</bdi>
					</div> 
					<div class="ty-info-field s-zipcode">
						<bdi>{{ $order->address->country }}</bdi>
					</div> 
				</div>
			</div>
			<div class="ty-profiles-info__item">
				<h5 class="ty-profiles-info__title">Contact information</h5>
				<div class="ty-profiles-info__field">                                <div class="ty-info-field firstname">
					<bdi>{{ $order->user->name }}</bdi>
				</div>
				<div class="ty-info-field email">
					<bdi>{{ $order->user->email }}</bdi>
				</div>
				<div class="ty-info-field phone">
					<bdi>{{ $order->user->phone }}</bdi>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection