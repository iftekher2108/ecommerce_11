@extends('layouts.app')
@section('title', 'Product Create')
@section('content')

    <div class="row g-2">


        <div class="col-md-7">
            <div class="card border">
                <div class="card-body">

                    <div class="mb-3">
                        <label for="title" class="form-label">Product Title <span class="text-danger">*</span></label>
                        <input id="title" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" type="text" placeholder="title" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>



                    <div class="mb-3">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea class="form-control @error('short_description') is-invalid @enderror"  placeholder="Short Description" name="short_description" id="short_description" rows="3">{{ old('short_description') }}</textarea>
                        @error('short_description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="row g-2">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="brand" class="form-label">Brand <span class="text-danger">*</span></label>
                                <select id="brand" name="brand_id" class="form-select @error('brand_id') is-invalid @enderror">
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
                                <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                                <select id="category" class="form-select @error('category_id') is-invalid @enderror">
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
                        <input id="sku" name="sku" class="form-control @error('sku') is-invalid @enderror" type="text" placeholder="SKU" />
                        @error('sku')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="row g-2">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                                <select id="category" class="form-select">
                                    <option value="in_stock">In Stock</option>
                                    <option value="out_of_stock">Out Of Stock</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="quentity" class="form-label">Quentity <span class="text-danger">*</span></label>
                                <input id="quentity" class="form-control" type="number" min="0" placeholder="0" />
                            </div>
                        </div>


                    </div>






                </div>


            </div>
        </div>

        <div class="col-md-5">
            <div class="card border">
                <div class="card-body">

                    <div class="mb-3">
                        <label for="image" class="form-label">Product Image <span class="text-danger">*</span></label><br>
                        <img src="{{ asset('admin_assets/image/preview.png') }}" height="120"
                            class="preview-img rounded border shadow" alt="preview picture">
                        <input type="file" id="image" accept="image/*" name="image" hidden
                            class="form-control input-image" />
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
                        <input type="file" id="images" hidden class="images" multiple name="images[]" accept="image/*">
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
                        <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                        <textarea class="tinymce form-control"  placeholder="Description" id="description" rows="3"></textarea>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12 mb-3">
            <div class="card border">
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <label for="status" class="form-label">Status <span class="text-danger">*</span></label>
                                <select id="status" name="status" class="form-select">
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                </select>
                        </div>
                        <a href="" class="btn btn-primary">Publish</a>
                    </div>
                </div>

            </div>

        </div>


    </div>

@endsection

@push('script')
    <script>
        tinymceEditor("{{ route('tiny_mce_image_upload')}}")
        // multiple product image preview function
        $('.input-images').click(function() {
            $('.images').click();
        })
        $('.images').change(function(e) {
            $('.product-images').empty();
            var images = e.target.files
            $.each(images, function(index, image) {
                var image_path =URL.createObjectURL(image)
              $('.product-images').append(`
               <img src="${image_path}" class="rounded border shadow"
                                style="height: 70px; width:70px;" alt="preview picture" />
               `)
            });
        })
        // multiple product image preview function



    </script>
@endpush
