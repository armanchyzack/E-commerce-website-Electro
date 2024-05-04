@extends('layouts.dashboard_layout')
@section('content_here')
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Category & Sub-Category Management</h5>
        <p class="mb-0">Brand add,edit,view from here...</p>

        {{-- @if (session()->has('success'))
            <div class="alert alert-success mt-3" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('deletesuccess'))
            <div class="alert alert-danger mt-3" role="alert">
                {{ session('deletesuccess') }}
            </div>
        @endif --}}
    </div>
</div>
<div class="card-body row">
    <h5 class="card-title fw-semibold mb-4 text-center">Category & Sub-Category Add Forms</h5>

    <div class="card col-5 me-5">

        <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" class="form-control" name="category_title">
                    @error('category_title')
                        <span class="" style="color: darkred">{{
                            $message
                        }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" name="category_slug">
                    @error('category_slug')
                        <span class="" style="color: darkred">{{
                            $message
                        }}</span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>




    </div>
    <div class="card col-5 me-5">

        <div class="card-body">
            <form action="{{ route('category.sub.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Sub-Category Name</label>
                    <input type="text" class="form-control" name="sub_category_title">
                    @error('sub_category_title')
                        <span class="" style="color: darkred">{{
                            $message
                        }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" class="form-control" name="sub_category_slug">
                    @error('sub_category_slug')
                        <span class="" style="color: darkred">{{
                            $message
                        }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Parent Category</label>
                    <select class="form-control" name="parent_category">
                        <option value="" selected disabled>Select a Parent Category</option>
                        @foreach ($categories as $category )
                            <option  value="{{ $category->id }}"  >{{ ucfirst($category->title) }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>




    </div>
</div>
@endsection
