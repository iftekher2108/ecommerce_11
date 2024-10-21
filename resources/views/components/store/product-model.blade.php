{{-- model body --}}
<div class="row no-gutters">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <!-- Product Slider -->
        <div class="product-gallery">
            <div class="quickview-slider-active">
                @php
                    $images = explode(',',$product->images)
                @endphp
                <div class="single-slider">
                    <img src="{{asset('storage/'.$product->image)}}" class="img-fluid" alt="#">
                </div>
                @forelse ($images as $image)
                <div class="single-slider">
                    <img src="{{asset('storage/'.$image)}}" class="img-fluid" alt="#">
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
                    <input type="number" name="quant[1]" class="input-number" min="1"
                        value="1">
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
{{-- model body --}}
<script>
    /*===========================
  Quick View Slider JS
=============================*/
$('.quickview-slider-active').owlCarousel({
    items:1,
    autoplay:true,
    autoplayTimeout:5000,
    smartSpeed: 400,
    autoplayHoverPause:true,
    nav:true,
    loop:true,
    merge:true,
    dots:false,
    navText: ['<i class=" ti-arrow-left"></i>', '<i class=" ti-arrow-right"></i>'],
});

$('.quantity .plus .btn-number').on('click', function () {
    var $qty = $('.quantity .input-number');
    var currentVal = parseInt($qty.val(), 10);
    if (!isNaN(currentVal)) {
        $qty.val(currentVal + 1);
    }
});
$('.quantity .minus .btn-number').on('click',function () {
    var $qty = $('.quantity .input-number');
    var currentVal = parseInt($qty.val(), 10);
    if (!isNaN(currentVal) && currentVal > 1) {
        $qty.val(currentVal - 1);
    }
});

</script>
