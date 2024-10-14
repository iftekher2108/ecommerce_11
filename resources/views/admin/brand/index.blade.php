@extends('layouts.app')
@section('title','Brand')
@section('content')

<div class="d-flex justify-content-between mb-3">
    <a href="" class="btn btn-danger">Delete all</a>
    <a href="{{ route('brand.create') }}" class="btn btn-primary">Create</a>
    </div>

    <div class="card">

        <div class="card-body">
            <div class="table-responsive text-nowrap">
              <table class="table normal-dt table-bordered">
                <thead>
                  <tr class="bg-primary">
                    <th><input type="checkbox" class="form-check-input border border-black"></th>
                    <th class="text-white">Picture</th>
                    <th class="text-white">Title</th>
                    {{-- <th class="text-white">Users</th> --}}
                    <th class="text-white">Status</th>
                    <th class="text-white">Actions</th>
                  </tr>
                </thead>
                <tbody>

                    @foreach ($brands as $brand)
                    <tr>
                    <td><input type="checkbox" value="{{ $brand->id }}" class="form-check-input"></td>
                    <td>
                      <img src="{{ asset('storage/'.$brand->image) }}" class="img-thumbnail" height="40" width="40" alt="Category">
                    </td>
                    <td>{{ $brand->name }}</td>
                    <td><span class="badge {{ $brand->status == 'active' ? "bg-success" : "bg-danger" }}  me-1">{{ $brand->status }}</span></td>
                    <td>
                      <a class="btn btn-success btn-sm me-1" href="javascript:void(0);">
                        <i class="bx bx-edit-alt me-1"></i>
                         Edit
                        </a>
                          <a class="btn btn-danger btn-sm" href="javascript:void(0);">
                            <i class="bx bx-trash me-1"></i>
                             Delete
                        </a>
                    </td>
                  </tr>
                    @endforeach



                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection



