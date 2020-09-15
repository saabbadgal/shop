@extends('user.layouts.app')
@section('content')
<div class="md-stepper-horizontal">
<div class="md-step active done">
<div class="md-step-circle"><span>1</span></div>
<div class="md-step-title">Base Shoe</div>
<div class="md-step-bar-left"></div>
<div class="md-step-bar-right"></div>
</div>
<div class="md-step active done">
<div class="md-step-circle"><span>2</span></div>
<div class="md-step-title">Select Size</div>
{{-- <div class="md-step-optional">Optional</div> --}}
<div class="md-step-bar-left"></div>
<div class="md-step-bar-right"></div>
</div>
<div class="md-step active done">
<div class="md-step-circle"><span>3</span></div>
<div class="md-step-title">Select Design</div>
<div class="md-step-optional">Optional</div>
<div class="md-step-bar-left"></div>
<div class="md-step-bar-right"></div>
</div>
<div class="md-step active editable">
<div class="md-step-circle"><span>4</span></div>
<div class="md-step-title">Add to cart</div>
<div class="md-step-bar-left"></div>
<div class="md-step-bar-right"></div>
</div>
</div>
<div class="tygh-content clearfix">
<div class="container-fluid  content-grid">
<div class="row-fluid">                        <div class="span16  main-content-grid">
<div class="ty-mainbox-container clearfix">
<div class="ty-mainbox-body">
<div>
<div class="ty-mainbox-cart__body">
<div id="cart_items">
<table class="ty-cart-content ty-table">
    <thead>
        <tr>
            <th class="ty-cart-content__title ty-left">Base</th>
            <th class="ty-cart-content__title ty-left">Design</th>
            <th class="ty-cart-content__title ty-left">Details</th>
        </tr>
    </thead>
<tbody>
    <tr>
        <td class="ty-cart-content__product-elem ty-cart-content__image-block">
            <div class="ty-table__responsive-header">Base Shoe</div>
            <div class="ty-table__responsive-content">
                <div class="ty-cart-content__image cm-reload-854632401" id="product_image_update_854632401">
                    <img class="ty-pict cm-image"  src="{{ asset($product->primary_image) }}">
                </div>
            </div>
        </td>
        <td class="ty-cart-content__product-elem ty-cart-content__image-block">
            <div class="ty-table__responsive-header">Design Shoe</div>
            <div class="ty-table__responsive-content">
                <div class="ty-cart-content__image cm-reload-854632401" id="product_image_update_854632401">
                    <img class="ty-pict cm-image"  src="{{ asset($design->primary_image) }}">
                </div>
            </div>
        </td>
        
<td class="ty-cart-content__product-elem ty-cart-content__description" style="width: 50%;"><div class="ty-table__responsive-header">&nbsp;</div><div class="ty-table__responsive-content">
<a href="" class="ty-cart-content__product-title">{{ $product->name }}</a>
<div id="options_854632401" class="ty-product-options ty-group-block">
    <div class="ty-group-block__arrow">
        <span class="ty-caret-info"><span class="ty-caret-outer"></span><span class="ty-caret-inner"></span></span>
    </div>
    <bdi>
    <div class="cm-reload-854632401" id="product_info_update_854632401">
        <div class="ty-reward-points__product-info">
            <strong class="ty-control-group__label">Base Shoe Price:</strong>
            <span class="ty-control-group__item" id="price_in_points_854632401">{{ '$'.$product->price }}</span>
        </div>
        <div class="ty-reward-points__product-info">
            <strong class="ty-control-group__label">Design Price:</strong>
            <span class="ty-control-group__item" id="price_in_points_854632401">{{ '$'.$design->designPrice }}</span>
        </div>
        <!--product_info_update_854632401--></div>
        </bdi>
    </div>
</div></td>
    </tr>
</tbody>
</table>
<!--cart_items--></div>
</div>
</div>
<div>
<!--checkout_form--></form>
<div class="ty-cart-total">
    <form action="{{ route('addToCart',[$product,$design,$total]) }}" method="post" id="form-id">
        @csrf
<div class="ty-cart-total__wrapper clearfix" id="checkout_totals">
    <ul class="ty-cart-statistic__total-lis">
        <li class="ty-cart-statistic__item ty-cart-statistic__total p-0">
            <span class="ty-cart-statistic__total-title">Total cost</span>
            <span class="ty-cart-statistic__total-value mr-4">
                <bdi><span id="sec_cart_total" class="ty-price">{{ '$'.$total }}</span></bdi>
            </span>
            <span class="">
               
                     
                <a href="#" class="ty-btn ty-btn__primary " onclick="document.getElementById('form-id').submit();">Add to Cart</a>
                   
{{-- <button name="submit" class="ty-btn ty-btn__primary float-right" type="submit">Add to Cart</button> --}}
               
            </span>
        </li>
    </ul>
    <!--checkout_totals--></div> </form>
</div> 
</div>
</div>
</div>
</div>
</div>
</div>
</div>

 @endsection