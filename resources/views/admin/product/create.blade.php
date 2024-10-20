@extends('layouts.app')
@section('title', 'Product Create')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-2">

            <div class="col-12 mb-3">
                <div class="card border">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <label for="status" class="form-label">Status <span
                                        class="text-danger">*</span></label>
                                <select id="status" name="status" class="form-select">
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </select>
                            </div>
                            <button class="btn btn-primary">Publish</button>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-md-7 d-flex align-self-stretch">
                <div class="card w-100 border">
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="title" class="form-label">Product Title <span class="text-danger">*</span></label>
                            <input id="title" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" name="name" type="text" placeholder="title" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>



                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea class="form-control @error('short_description') is-invalid @enderror" placeholder="Short Description"
                                name="short_description" id="short_description" rows="6">{{ old('short_description') }}</textarea>
                            @error('short_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="row g-2">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="brand" class="form-label">Brand <span
                                            class="text-danger">*</span></label>
                                    <select id="brand" name="brand_id"
                                        class="form-select @error('brand_id') is-invalid @enderror">
                                        @forelse ($brands as $brand)
                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                        @empty
                                            <option>Brand Not Found</option>
                                        @endforelse
                                    </select>
                                    @error('brand_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="category" class="form-label">Category <span
                                            class="text-danger">*</span></label>
                                    <select id="category" name="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @empty
                                            <option>Category Not Found</option>
                                        @endforelse
                                    </select>
                                    @error('category_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                        </div>


                        <div class="mb-3">
                            <label for="sku" class="form-label">SKU Code <span class="text-danger">*</span></label>
                            <input id="sku" name="sku" value="{{ old('sku') }}" class="form-control @error('sku') is-invalid @enderror"
                                type="text" placeholder="SKU" />
                            @error('sku')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="row g-2">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="stock_status" class="form-label">Category <span
                                            class="text-danger">*</span></label>
                                    <select id="stock_status" name="stock_status" class="form-select">
                                        <option value="in_stock">In Stock</option>
                                        <option value="out_of_stock">Out Of Stock</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="quantity" class="form-label">Quantity <span
                                            class="text-danger">*</span></label>
                                    <input id="quantity" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}" type="number" min="0"
                                        placeholder="1" />
                                        @error('quantity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                        </div>

                        <div class="row g-2">

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="regular_price" class="form-label">Regular Price <span
                                            class="text-danger">*</span></label>
                                    <input type="number" id="regular_price" placeholder="Regular Price" name="regular_price" value="{{ old('regular_price') }}" class="form-control @error('regular_price') is-invalid @enderror" min="0" >
                                    @error('regular_price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="sale_price" class="form-label">Sale Price</label>
                                    <input id="sale_price" value="{{ old('sale_price') }}" class="form-control @error('sale_price') is-invalid @enderror" name="sale_price" type="number" min="0"
                                        placeholder="Sale Price" />
                                        @error('sale_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                        </div>

                    </div>


                </div>
            </div>

            <div class="col-md-5 d-flex align-self-stretch">
                <div class="card w-100 border">
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="image" class="form-label">Product Image <span
                                    class="text-danger">*</span></label><br>
                            <img src="{{ asset('admin_assets/image/preview.png') }}" height="120"
                                class="preview-img rounded border shadow" alt="preview picture">
                            <input type="file" id="image" accept="image/*" name="image" hidden
                                class="form-control input-image" /> <br>
                            @error('image')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="images" class="form-label">Product Images</label><br />
                            <img src="{{ asset('admin_assets/image/preview.png') }}" height="120"
                                class="input-images rounded border shadow" style="width: 100%" alt="preview picture" />
                            <input type="file" id="images" hidden class="images" multiple name="images[]"
                                accept="image/*">
                            <hr>

                            <div class="product-images d-flex flex-wrap gap-2 my-3">
                            </div>

                        </div>




                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card border">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description <span
                                    class="text-danger">*</span></label>
                            <textarea class="tinymce form-control" name="description" placeholder="Description" id="description" rows="3"></textarea>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </form>

@endsection

@section('script')
    <script>
        // multiple product image preview function
        $('.input-images').click(function() {
            $('.images').click();
        })
        $('.images').change(function(e) {
            $('.product-images').empty();
            var images = e.target.files
            $.each(images, function(index, image) {
                var image_path = URL.createObjectURL(image)
                $('.product-images').append(`
               <img src="${image_path}" class="rounded border shadow"
                                style="height: 70px; width:70px;" alt="preview picture" />
               `)
            });
        })
        // multiple product image preview function
    </script>
@endsection
