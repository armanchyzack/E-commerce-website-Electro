@extends('layouts.dashboard_layout')

@section('content_here')
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Product Management</h5>

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

            <h5 class="card-title fw-semibold mb-4">Product Add Forms</h5>

            <div class="card col-12 me-5">
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST" class="row" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Title</label>
                            <input type="text" class="form-control" name="product_title">
                            @error('product_title')
                                <span class="" style="color: darkred">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Slug</label>
                            <input type="text" class="form-control" name="product_slug">
                            @error('product_slug')
                                <span class="" style="color: darkred">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-4">
                            <label class="form-label">Product Brand</label>
                            <select  class="form-control" name="brand">
                                <option value="" disabled selected>Seleact a Brand name</option>
                                @foreach ($brands as $brand)

                                <option value="{{ $brand->id }}">{{ ucfirst($brand->title) }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="mb-3 col-4">
                            <label class="form-label">Product Category</label>
                            <select  class="form-control" name="category">
                                <option value="" disabled selected>Seleact a Category name</option>
                                <option value="">branassssssd</option>
                            </select>

                        </div>
                        <div class="mb-3 col-4">
                            <label class="form-label">Product Category</label>
                            <select  class="form-control" name="sub_category" >
                                <option value="" disabled selected>Seleact a Sub-Category name</option>
                                <option value="">hagdkja</option>
                            </select>

                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Price</label>
                            <input type="number" class="form-control" name="price">
                            @error('price')
                                <span class="" style="color: darkred">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Discount Price</label>
                            <input type="number" class="form-control" name="disc_price">
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Discount Price start date</label>
                            <input type="date" class="form-control" name="disc_price_date_start">

                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Discount Price end date</label>
                            <input type="date" class="form-control" name="disc_price_date_end">

                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Status</label>
                            <select class="form-control" name="status">
                                <option value="{{ true }}">In Stoct</option>
                                <option value="{{ false }}">Out of Stoct</option>
                            </select>
                            @error('status')
                                <span class="" style="color: darkred">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Quantity</label>
                            <input type="number" class="form-control" name="quantity">
                            @error('quantity')
                                <span class="" style="color: darkred">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Color</label>
                            <select class="form-select" name="color" multiple aria-label="multiple select example">
                                <option selected disabled style="color: black">Select Color</option>
                                <option value="red">Red</option>
                                <option value="black">Black</option>
                                <option value="yellow">Yellow</option>
                              </select>
                              @error('color')
                              <span class="" style="color: darkred">{{ $message }}</span>
                              @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Size</label>
                            <select class="form-select" name="size" multiple aria-label="multiple select example">
                                <option selected disabled style="color: black">Select size</option>
                                <option value="X">X</option>
                                <option value="XL">XL</option>
                                <option value="L">L</option>
                                <option value="M">M</option>
                                <option value="s">s</option>
                              </select>
                              @error('size')
                              <span class="" style="color: darkred">{{ $message }}</span>
                              @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Thumbnail Image</label>
                            <input type="file" class="form-control" name="thumbnail_image">
                            @error('thumbnail_image')
                                <span class="" style="color: darkred">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Gallary Image</label>
                            <input type="file" multiple class="form-control" name="gallary_image[]">
                            @error('brand_slug')
                                <span class="" style="color: darkred">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Details</label>
                            <textarea type="text" class="form-control" name="details" ></textarea>
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Product Description</label>
                            <textarea type="text" class="form-control" name="desc" ></textarea>
                        </div>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>



        </div>

    </div>
    </div>


@endsection
