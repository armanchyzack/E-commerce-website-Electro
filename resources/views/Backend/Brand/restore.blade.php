@extends('layouts.dashboard_layout')
@section('content_here')

<div class="card col-12">
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
                  <td class="pt-4">{{ucfirst($brand->title) }}</td>
                  <td class="pt-4">{{ $brand->slug }}</td>
                  <td class="col-4">
                    <form action="{{ route('brand.force.delete',$brand->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <a href="{{ route('brand.restore',$brand->id) }}" class="btn btn-sm btn-warning m-1">Restore</a>
                        <input type="submit" class="btn btn-sm btn-danger" value="Delete"/>
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
          @if (session()->has('deletesuccess'))
                    <div class="alert alert-danger mt-3" role="alert">
                        {{ session('deletesuccess') }}
                    </div>
            @endif
    </div>
</div>
@endsection
