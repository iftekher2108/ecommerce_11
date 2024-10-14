@extends('layouts.app')
@section('title','Product')
@section('content')
<div class="d-flex justify-content-between mb-3">
<a href="" class="btn btn-danger">Delete all</a>
<a href="{{ route('product.create') }}" class="btn btn-primary">Create</a>
</div>

<div class="card">

    <div class="card-body">
        <div class="table-responsive text-nowrap">
          <table class="table normal-dt table-bordered">
            <thead>
              <tr class="bg-primary">
                <th><input type="checkbox" class="form-check-input border border-black"></th>
                <th class="text-white">Project</th>
                <th class="text-white">Client</th>
                <th class="text-white">Users</th>
                <th class="text-white">Status</th>
                <th class="text-white">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input type="checkbox" name="" id="" class="form-check-input"></td>
                <td>
                  <i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong>
                </td>
                <td>Albert Cook</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">

                    <li
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar avatar-xs pull-up"
                      title="Lilian Fuller"
                    >
                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                    </li>

                  </ul>
                </td>

                <td><span class="badge bg-label-primary me-1">Active</span></td>

                <td>
                  {{-- <div class="dropdown">
                    <button
                      type="button"
                      class="btn p-0 dropdown-toggle hide-arrow"
                      data-bs-toggle="dropdown"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div> --}}

                  <a class="btn btn-success btn-sm" href="javascript:void(0);">
                    <i class="bx bx-edit-alt me-1"></i>
                     Edit
                    </a>
                      <a class="btn btn-danger btn-sm" href="javascript:void(0);">
                        <i class="bx bx-trash me-1"></i>
                         Delete
                    </a>


                </td>
              </tr>

              <tr>
                <td><input type="checkbox" class="form-check-input border"></td>
                <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React Project</strong></td>
                <td>Barry Hunter</td>
                <td>
                  <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <li
                      data-bs-toggle="tooltip"
                      data-popup="tooltip-custom"
                      data-bs-placement="top"
                      class="avatar avatar-xs pull-up"
                      title="Lilian Fuller"
                    >
                      <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                    </li>

                  </ul>
                </td>
                <td><span class="badge bg-label-success me-1">Completed</span></td>
                <td>
                  <div class="dropdown">
                    <button
                      type="button"
                      class="btn p-0 dropdown-toggle hide-arrow"
                      data-bs-toggle="dropdown"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                      >
                      <a class="dropdown-item" href="javascript:void(0);"
                        ><i class="bx bx-trash me-1"></i> Delete</a
                      >
                    </div>
                  </div>
                </td>
              </tr>




            </tbody>
          </table>
        </div>
      </div>
</div>

@endsection



