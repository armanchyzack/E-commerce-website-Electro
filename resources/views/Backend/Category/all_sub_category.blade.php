@extends('layouts.dashboard_layout')
@section('content_here')
<div class="row">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Sub Category Management</h5>
            <p class="mb-0">Sub Category add,edit,view from here...</p>

            @if (session()->has('success'))
                <div class="alert alert-success mt-3" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session()->has('deletesuccess'))
                <div class="alert alert-danger mt-3" role="alert">
                    {{ session('deletesuccess') }}
                </div>
            @endif
        </div>
    </div>

    <div class="card col-10">
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Parent Category ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($subcategories as $key=>$subcategory)
                    <tr>
                      <th class="pt-4" scope="row">{{ ++$key }}</th>
                      <td class="pt-4">{{$subcategory->Categories_id }}</td>
                      <td class="pt-4">{{ ucfirst($subcategory->title) }}</td>
                      <td class="col-4">
                        <a href="" class="btn btn-sm btn-info m-1">Edit</a>
                        <a href="" class="btn btn-sm btn-danger m-1">Delete</a>
                      </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="pt-4 text-center w-full">No Data Found</td>
                    </tr>

                    @endforelse

                </tbody>
              </table>
              {{ $subcategories->links() }}
        </div>
    </div>
</div>
@endsection
