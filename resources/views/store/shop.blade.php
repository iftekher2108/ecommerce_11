@extends('layouts.base')
@section('head')
@endsection

@section('content')
    <!-- Breadcrumbs -->
    {{-- <div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
								<li class="active"><a href="blog-single.html">Shop Grid</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
    <!-- End Breadcrumbs -->

    <!-- Product Style -->
    <section class="product-area shop-sidebar shop section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 col-12">
                    <div class="shop-sidebar">
                            <!-- Single Widget -->
                            <div class="category">
                                <h3 class="title">Brands</h3>
                                <ul class="categor-list p-3">
                                    @foreach ($brands as $key => $brand)
                                        <li><input type="checkbox" name="brand[{{ $key }}]" value="{{ $brand->id }}" id="{{ $brand->slug }}" class="form-check-input">
                                            <label for="{{ $brand->slug }}">{{ $brand->name }}</label>
                                            {{-- <a href="{{ route('category.search', $category->slug) }}">{{ $category->name }}</a> --}}
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Single Widget -->
                            <div class="category mt-2">
                                <h3 class="title">Categories</h3>
                                <ul class="categor-list p-3">
                                    @foreach ($categories as $key => $category)
                                        <li><input type="checkbox" name="category[{{ $key }}]" id="{{ $category->slug }}" class="form-check-input">
                                            <label for="{{ $category->slug }}">{{ $category->name }}</label>
                                            {{-- <a href="{{ route('category.search', $category->slug) }}">{{ $category->name }}</a> --}}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--/ End Single Widget -->
                            <!-- Shop By Price -->
                            <div class="range my-2">
                                <h3 class="title">Shop by Price</h3>
                                <div class="price-filter">
                                    <div class="price-filter-inner">
                                        <div id="slider-range"></div>
                                        <div class="price_slider_amount">
                                            <div class="label-input">
                                                <span>Range:</span><input type="text" id="amount" name="price"
                                                    placeholder="Add Your Price" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- <ul class="check-box-list">
                                <li>
                                    <label class="checkbox-inline" for="1"><input name="news" id="1"
                                            type="checkbox">$20 - $50<span class="count">(3)</span></label>
                                </li>
                                <li>
                                    <label class="checkbox-inline" for="2"><input name="news" id="2"
                                            type="checkbox">$50 - $100<span class="count">(5)</span></label>
                                </li>
                                <li>
                                    <label class="checkbox-inline" for="3"><input name="news" id="3"
                                            type="checkbox">$100 - $250<span class="count">(8)</span></label>
                                </li>
                            </ul> --}}

                            </div>
                            <!--/ End Shop By Price -->

                            <div class="d-flex justify-content-end">
                                <button class="btn shop_filter_search">Filter</button>
                            </div>

                        <!-- Single Widget -->
                        <div class="single-widget recent-post">
                            <h3 class="title">Recent post</h3>

                            @foreach ($side_products as $side_product)
                                <!-- Single Post -->
                                <div class="single-post first">
                                    <div class="image">
                                        <img src="{{ asset('storage/' . $side_product->image) }}" alt="#">
                                    </div>
                                    <div class="content">
                                        <h5><a
                                                href="{{ route('product.detail', $side_product->slug) }}">{{ $side_product->name }}</a>
                                        </h5>
                                        <p class="price">$99.50</p>

                                        @if ($side_product->sale_price > 0 || $side_product->sale_price != null)
                                            <del>{{ $side_product->regular_price }} ৳</del>
                                            <p>{{ $side_product->sale_price }} ৳</p>
                                        @else
                                            <p>{{ $side_product->regular_price }} ৳</p>
                                        @endif

                                    </div>
                                </div>
                                <!-- End Single Post -->
                            @endforeach





                        </div>
                        <!--/ End Single Widget -->

                        <!-- Single Widget -->
                        {{-- <div class="single-widget category">
                            <h3 class="title">Manufacturers</h3>
                            <ul class="categor-list">
                                <li><a href="#">Forever</a></li>
                                <li><a href="#">giordano</a></li>
                                <li><a href="#">abercrombie</a></li>
                                <li><a href="#">ecko united</a></li>
                                <li><a href="#">zara</a></li>
                            </ul>
                        </div> --}}
                        <!--/ End Single Widget -->

                    </div>
                </div>
                <div class="col-lg-9 col-md-8 col-12">
                    {{-- <div class="row">
							<div class="col-12">
								<!-- Shop Top -->
								<div class="shop-top">
									<div class="shop-shorter">
										<div class="single-shorter">
											<label>Show :</label>
											<select>
												<option selected="selected">09</option>
												<option>15</option>
												<option>25</option>
												<option>30</option>
											</select>
										</div>
										<div class="single-shorter">
											<label>Sort By :</label>
											<select>
												<option selected="selected">Name</option>
												<option>Price</option>
												<option>Size</option>
											</select>
										</div>
									</div>
									<ul class="view-mode">
										<li class="active"><a href="shop-grid.html"><i class="fa fa-th-large"></i></a></li>
										<li><a href="shop-list.html"><i class="fa fa-th-list"></i></a></li>
									</ul>
								</div>
								<!--/ End Shop Top -->
							</div>
						</div> --}}


                    <div class="row">

                        @forelse ($products as $product)
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="single-product border p-2">
                                    <div class="product-img">
                                        <a href="{{ route('product.detail', $product->slug) }}">
                                            <img class="default-img" src="{{ asset('storage/' . $product->image) }}"
                                                alt="#">
                                            <img class="hover-img" src="{{ asset('storage/' . $product->image) }}"
                                                alt="#">
                                        </a>
                                        <div class="button-head">
                                            <div class="product-action">
                                                <a data-toggle="modal" data-target="#exampleModal"
                                                    onclick="quick_shop('{{ $product->id }}','{{ url('quick-shop-preview') }}')"
                                                    title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick
                                                        Shop</span></a>
                                                <a title="Wishlist" class="mr-2" href="#"><i
                                                        class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                {{-- <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add to Compare</span></a> --}}
                                            </div>
                                            <div class="product-action-2">
                                                <a title="Add to cart" class="btn" href="#">Add to cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <h3><a
                                                href="{{ route('product.detail', $product->slug) }}">{{ $product->name }}</a>
                                        </h3>
                                        <div class="product-price">
                                            @if ($product->sale_price > 0 || $product->sale_price != null)
                                                <span class="old">{{ $product->regular_price }} ৳</span>
                                                <span>{{ $product->sale_price }} ৳</span>
                                            @else
                                                <span>{{ $product->regular_price }} ৳</span>
                                            @endif

                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                        @endforelse






                        {{-- <div class="col-lg-4 col-md-6 col-12">
                            <div class="single-product">
                                <div class="product-img">
                                    <a href="product-details.html">
                                        <img class="default-img" src="https://via.placeholder.com/550x750"
                                            alt="#">
                                        <img class="hover-img" src="https://via.placeholder.com/550x750" alt="#">
                                    </a>
                                    <div class="button-head">
                                        <div class="product-action">
                                            <a data-toggle="modal" data-target="#exampleModal" title="Quick View"
                                                href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                            <a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to
                                                    Wishlist</span></a>
                                            <a title="Compare" href="#"><i class="ti-bar-chart-alt"></i><span>Add
                                                    to Compare</span></a>
                                        </div>
                                        <div class="product-action-2">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3><a href="product-details.html">Awesome Pink Show</a></h3>
                                    <div class="product-price">
                                        <span>$29.00</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}



                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="m-5">
        {{ $products->links() }}
    </div>
    <!--/ End Product Style 1  -->

    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Your email address" required="" type="email">
                                <button class="btn">Subscribe</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close"
                            aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
@endsection


@section('script')
    <script>
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: {{ DB::table('products')->max('regular_price') }} + 2000,
            values: [120, {{ DB::table('products')->avg('regular_price') }} + 2000],
            slide: function(event, ui) {
                $("#amount").val("৳" + ui.values[0] + " - ৳" + ui.values[1]);
            }
        });
        $("#amount").val("৳" + $("#slider-range").slider("values", 0) +
            " - ৳" + $("#slider-range").slider("values", 1));


            $('.shop_filter_search').click(function(){
                console.log("iftekher mahmud pervez")
            })



    </script>
@endsection
