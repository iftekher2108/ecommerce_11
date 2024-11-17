@extends('layouts.base')

@section('style')
    <style>
        .owl-nav {
            margin: 0;
            position: absolute;
            top: 50%;
            width: 100%;
            margin-top: -25px;
        }

        .owl-carousel .owl-nav div {
            height: 60px;
            width: 30px;
            line-height: 58px;
            background: #fff;
            color: #333;
            position: absolute;
            margin: 0;
            border-radius: 0;
            font-size: 15px;
            text-align: center;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            transition: all 0.4s ease;
            box-shadow: 0 0 10px #3333331c;
        }

        .owl-carousel .owl-nav div:hover {
            color: #fff;
            background: #f7941d !important;
        }

        .owl-carousel .owl-controls .owl-nav .owl-prev {
            left: 0;
        }

        .owl-carousel .owl-controls .owl-nav .owl-next {
            right: 0;
        }
    </style>
@endsection

@section('content')
    <div>
        <div class="row no-gutters">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <!-- Product Slider -->
                <div class="product-gallery">
                    <div class="quickview-slider-active">
                        @php
                            $images = explode(',', $product->images);
                        @endphp
                        <div class="single-slider">
                            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid" alt="#">
                        </div>
                        @forelse ($images as $image)
                            <div class="single-slider">
                                <img src="{{ asset('storage/' . $image) }}" class="img-fluid" alt="#">
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
                <!-- End Product slider -->
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="quickview-content">
                    <h2 class="title">{{ $product->name }}</h2>
                    <div class="quickview-ratting-review">
                        <div class="quickview-stock">
                            <span> {{ $product->stock_status == 'in_stock' ? 'In Stock' : 'Out Of Stock' }}</span>
                        </div>
                    </div>
                    @if (!$product->sale_price == null || $product->sale_price > 0)
                        <h3><del>{{ $product->regular_price }} ৳</del> {{ $product->sale_price }} ৳</h3>
                    @else
                        <h3>{{ $product->regular_price }} ৳</h3>
                    @endif

                    <div class="quickview-ratting-review mb-3">
                        <div class="quickview-stock">
                            <span><strong>Quantity: </strong>{{ $product->quantity }}</span>
                        </div>
                    </div>

                    <div class="quickview-peragraph mb-2">
                        <pre>{{ $product->short_description }}</pre>
                    </div>
                    <div class="quickview-peragraph mb-3">
                        <span><strong>Brand:</strong> {{ $product->brand->name }}</span> <br>
                        <span><strong>Category:</strong> {{ $product->category->name }}</span>
                    </div>

                    <div class="quantity">
                        <!-- Input Order -->
                        <div class="input-group">
                            <div class="button minus">
                                <button type="button" class="btn btn-primary btn-number">
                                    <i class="ti-minus"></i>
                                </button>
                            </div>
                            <input type="number" name="quant[1]" class="input-number" min="1" value="1">
                            <div class="button plus">
                                <button type="button" class="btn btn-primary btn-number">
                                    <i class="ti-plus"></i>
                                </button>
                            </div>
                        </div>
                        <!--/ End Input Order -->
                    </div>
                    <div class="add-to-cart">
                        <a href="#" class="btn">Add to cart</a>
                        <a href="#" class="btn min"><i class="ti-heart"></i></a>
                    </div>


                </div>
            </div>
        </div>
        <hr>

        <div class="p-5">
            <h3 class="title">Description</h3>
            <hr>
            {!! $product->description !!}

        </div>

        <hr>

        <div class="owl-carousel popular-slider mb-5 ">

            @forelse ($side_products as $side_product)
                <!-- Start Single Product -->
                <div class="single-product">
                    <div class="product-img">
                        <a href="{{ route('product.detail', $side_product->slug) }}">
                            <img class="default-img" src="{{ asset('storage/' . $side_product->image) }}" alt="#">
                            <img class="hover-img" src="{{ asset('storage/' . $side_product->image) }}" alt="#">
                            {{-- <span class="out-of-stock">Hot</span> --}}
                        </a>
                        <div class="button-head">
                            <div class="product-action">
                                {{-- <a data-toggle="modal" onclick="quick_shop('{{ $side_product->id }}','{{ route('quick.shop.preview') }}')"
                                            data-target="#exampleModal" title="Quick View" href="#"><i
                                                class=" ti-eye"></i><span>Quick Shop</span></a> --}}
                                <a title="Wishlist" class="mr-3" href="#"><i class=" ti-heart "></i><span>Add to
                                        Wishlist</span></a>
                                {{-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
                                            Compare</span></a> --}}
                            </div>
                            <div class="product-action-2">
                                <a title="Add to cart" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="product-content">
                        <h3><a href="{{ route('product.detail', $side_product->slug) }}">{{ $product->name }}</a></h3>
                        <div class="product-price">
                            @if ($side_product->sale_price > 0 || $side_product->sale_price != null)
                                <span class="old">{{ $side_product->regular_price }} ৳</span>
                                <span>{{ $side_product->sale_price }} ৳</span>
                            @else
                                <span>{{ $side_product->regular_price }} ৳</span>
                            @endif
                        </div>
                    </div>
                </div>
                <!-- End Single Product -->

            @empty
            @endforelse



            <!-- Start Single Product -->
            {{-- <div class="single-product">
                        <div class="product-img">
                            <a href="product-details.html">
                                <img class="default-img" src="https://via.placeholder.com/550x750" alt="#">
                                <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                            </a>
                            <div class="button-head">
                                <div class="product-action">
                                    <a data-toggle="modal" data-target="#exampleModal" title="Quick View"
                                        href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                    <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
                                            Wishlist</span></a>
                                    <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to
                                            Compare</span></a>
                                </div>
                                <div class="product-action-2">
                                    <a title="Add to cart" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="product-content">
                            <h3><a href="product-details.html">Awesome Bags Collection</a></h3>
                            <div class="product-price">
                                <span>$50.00</span>
                            </div>
                        </div>
                    </div> --}}
            <!-- End Single Product -->


        </div>





    </div>
@endsection

@section('script')
    <script>
        $('.quickview-slider-active').owlCarousel({
            items: 1,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 400,
            autoplayHoverPause: true,
            nav: true,
            loop: true,
            merge: true,
            dots: false,
            navText: ['<i class=" ti-arrow-left"></i>', '<i class=" ti-arrow-right"></i>'],
        });

        $('.quantity .plus .btn-number').on('click', function() {
            var $qty = $('.quantity .input-number');
            var currentVal = parseInt($qty.val(), 10);
            if (!isNaN(currentVal)) {
                $qty.val(currentVal + 1);
            }
        });
        $('.quantity .minus .btn-number').on('click', function() {
            var $qty = $('.quantity .input-number');
            var currentVal = parseInt($qty.val(), 10);
            if (!isNaN(currentVal) && currentVal > 1) {
                $qty.val(currentVal - 1);
            }
        });
    </script>
@endsection
