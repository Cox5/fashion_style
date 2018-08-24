<!DOCTYPE html>
<html>
<head>
	@include('layouts.head')
</head>
<body>

    <div class="container products-page">

        @include('layouts.nav')

        <div class="content">

            @include('layouts.filters')

            <div class="block products-list">
                    <ul class="clearfix">
    
                        {{-- start listing products dynamically --}}
                        @forelse ($products as $product)
    
                            <li class="product">
                            <div class="product-wrap">
                                    <a class="product-thumbnail" href="/product/{{$product->id}}">
                                    <img src="{{URL::asset('img/content/products/'.$product->image_front.'.jpg')}}" alt="" class="front">
                                    <img src="{{URL::asset('img/content/products/'.$product->image_back.'.jpg')}}" alt="" class="back">
                                </a>
                                <div class="product-info">
                                    <!-- reusable product-colors block from product page -->
                                    <div class="product-colors">
                                        <ul class="slider-wrap">
                                            <li>
                                                <a href="javascript:;" data-color="brown light">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-white-smoke.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="grey smoke">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-dark-blue.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="dark blue">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-granite.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="brown light">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-red.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li class="selected">
                                                <a href="javascript:;" data-color="grey smoke">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-orange.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="dark blue">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-mineral-blue.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="brown light">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-sea-blue.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="grey smoke">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-blood-red.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="dark blue">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-brown-light.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="brown light">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-gravel-dark.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="grey smoke">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-grey-smoke.png')}}" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" data-color="dark blue">
                                                    <img src="{{ URL::asset('img/content/product-colors/color-dark-blue.png')}}" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- reusable product-sizes block from product page -->
                                    <div class="product-sizes">
                                        <ul class="slider-wrap">
                                            <li class="disabled"><a href="javascript:;">xs</a></li>
                                            <li><a href="javascript:;">s</a></li>
                                            <li class="selected"><a href="javascript:;">m</a></li>
                                            <li><a href="javascript:;">l</a></li>
                                            <li><a href="javascript:;">xl</a></li>
                                            <li><a href="javascript:;">xxl</a></li>
                                        </ul>
                                    </div>
                                    <form action="{{ route('cart.store') }}" method="POST">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                        <input type="hidden" name="product_name" value= "{{ $product->product_name }}">
                                        <input type="hidden" name="price" value= "{{ $product->price }}">
                                        <button class="btn btn-black" type="submit">add to bag</button>
                                    </form>
                                </div>
                            </div>
                            <div class="product-bottom">
                                <h6><a href="/product/{{$product->id}}">{{ $product->product_name }}</a></h6>
                                <span class="price">{{$product->price}}<sup>,00€</sup></span>
                            </div>
                        </li>
    
                        @empty
                            <h2>No match!</h2>
                        @endforelse
                    </ul>
                    <div class="centered">
                        <a class="btn btn-big load-more" href="javascript:;">Load more</a>
                    </div>
                </div>

        </div>

    </div>

	<!-- javascript -->
	<script type="text/javascript" src="{{ URL::asset('scripts/libs/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/helper.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('scripts/default.js') }}"></script>

</body>
</html>
