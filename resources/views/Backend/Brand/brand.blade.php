@extends('layouts.dashboard_layout')


@section('content_here')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Brand Management</h5>
                <p class="mb-0">Brand add,edit,view from here...</p>

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

        <div class="card-body row">
            @if (!isset($editedbrand))
            <h5 class="card-title fw-semibold mb-4">Brand Add Forms</h5>
            @else
            <h5 class="card-title fw-semibold mb-4">Brand Edit Forms</h5>
            @endif
            <div class="card col-4 me-5">
                @if (!isset($editedbrand))
                <div class="card-body">
                    <form action="{{ route('brand.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Brand Name</label>
                            <input type="text" class="form-control" name="brand_title">
                            @error('brand_title')
                                <span class="" style="color: darkred">{{
                                    $message
                                }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" name="brand_slug">
                            @error('brand_slug')
                                <span class="" style="color: darkred">{{
                                    $message
                                }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

                @else

                <div class="card-body">
                    <form action="{{ route('brand.update', $editedbrand->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Brand Name</label>
                            <input type="text" class="form-control" name="title" value= "{{ $editedbrand->title }}">


                            @error('title')
                                <span class="" style="color: darkred">{{
                                    $message
                                }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ $editedbrand->slug }}" >
                            @error('slug')
                                <span class="" style="color: darkred">{{
                                    $message
                                }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-outline-primary m-1">Update</button>
                    </form>
                </div>
                @endif

            </div>





            <div class="card col-7">
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                            @forelse ($brands as $key=>$brand)
                            <tr>
                              <th class="pt-4" scope="row">{{ ++$key }}</th>
                              <td class="pt-4">{{ ucfirst($brand->title) }}</td>
                              <td class="pt-4">{{ $brand->slug }}</td>
                              <td class="col-4">
                                  <form action="{{ route('brand.delete',$brand->slug) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('brand.edit',$brand->slug) }}" class="btn btn-sm btn-info m-1">Edit</a>
                                    <input type="submit" class="btn btn-sm btn-danger" value="trash"/>
                                  </form>
                              </td>
                            </tr>
                            @empty
                            <tr>
                                <td class="pt-4 text-center w-full">No Data Found</td>
                            </tr>

                            @endforelse




                        </tbody>
                      </table>
                      {{ $brands->links() }}
                </div>
            </div>


        </div>

    </div>

    @push('CustomJs')
    <script>
        let brandname = $('input[name="brand_title"]')
        let brandslug = $('input[name="brand_slug"]')
        brandname.keyup(function(){
            let value = $(this).val().toLowerCase().split(' ').join('-')
            brandslug.val(value)
        })


// $('.brandDelete').on('click',function(){

//     Swal.fire({
//         title: "Are you sure?",
//         text: "You won't be able to revert this!",
//         icon: "warning",
//         showCancelButton: true,
//         confirmButtonColor: "#3085d6",
//         cancelButtonColor: "#d33",
//         confirmButtonText: "Yes, delete it!"
//         }).then((result) => {
//         if (result.isConfirmed) {
//             $(this).next('form').submit()
//         }
//         });
// })



    </script>
    @endpush
@endsection
