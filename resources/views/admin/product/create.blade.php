@extends('layouts.app')
@section('title', 'Product Create')
@section('content')

    <div class="row g-2">

        <div class="col-md-7">
            <div class="card">
                <div class="card-body">

                    <div class="mb-3">
                        <label for="title" class="form-label">Product Title</label>
                        <input id="title" class="form-control" type="text" placeholder="title" />
                    </div>



                    <div class="mb-3">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea class="form-control" placeholder="Short Description" id="short_description" rows="3"></textarea>
                    </div>

                    <div class="row g-2">
                        <div class="col-md-6 mb-3">
                            <label for="brand" class="form-label">Brand</label>
                            <select id="brand" class="form-select">
                                @forelse ($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @empty
                                    <option>Brand Not Found</option>
                                @endforelse
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" class="form-select">
                                @forelse ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @empty
                                    <option>Category Not Found</option>
                                @endforelse
                            </select>
                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="sku" class="form-label">SKU Code</label>
                        <input id="sku" class="form-control" type="text" placeholder="SKU" />
                    </div>

                    <div class="row g-2">

                        <div class="col-md-6 mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select id="category" class="form-select">
                                <option value="in_stock">In Stock</option>
                                <option value="out_of_stock">Out Of Stock</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="quentity" class="form-label">Quentity</label>
                            <input id="quentity" class="form-control" type="number" min="0" placeholder="0" />
                        </div>

                    </div>




                </div>



            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="card">
            <div class="card-body">

            </div>
        </div>
    </div>

    </div>

@endsection
