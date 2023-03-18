@extends('layouts.backend.backend-app')
@section('title', 'Create Categories & Product')
@section('content')

<section class="inner-contents">
    <p class="fs-5 fw-bold pb-3">Product</p>

    <div class="product-add-sections">
      <div class="row">
        <div class="col-md-6">
          <div class="add-category">
            <h5 class="add-header">
              Add Category
            </h5>
            <form action="{{ route('category.store') }}" method="post">
            @csrf
                <input name="category_name" type="text" class="custom-input" placeholder="Category name">
                @error('category_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="py-2 text-end">
                <button type="submit" class="category-button btn">
                    Create New categories
                </button>
            </form>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="add-product">
            <h5 class="add-header d-flex justify-content-between align-items-center">
              Add Product <button class="btn"></button>
            </h5>
            <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <select name="category_id" id="" class="custom-input">
                <option value="">Choose a category</option>
                @foreach (categories() as $category)
                <option value="{{$category->id}}">{{$category->category_name}}</option>
                @endforeach
              </select>
              @error('category_id')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
              <input type="text" name="product_name" class="custom-input" placeholder="Name of product">
              @error('product_name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
              <input type="text" name="price" class="custom-input" placeholder="Price">
              @error('price')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
              <input type="text" name="code" class="custom-input" placeholder="Code">
              @error('code')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
              <textarea name="description" rows="5" class="custom-input" placeholder="Description"></textarea>
              @error('description')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
              <div class="row">
                {{-- <div class="col-6">
                  <input type="file" class="custom-input" placeholder="Load photo">
                </div> --}}
                <div>
                  <label for="formFileLg" class="form-label">Large file input example</label>
                  <input class="form-control form-control-lg" id="formFileLg" type="file" name="image">
                </div>
                {{-- <div class="col-6 d-flex align-items-center">
                  <span class="download">
                    <i class="fal fa-download" ></i>
                    <input type="file" id="imageInput">
                  </span>
                </div>
                <img id="img_id" src="" alt="img"> --}}
              </div>
              @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror

              <div class="div pt-2">
                <button class="cancel-buton my-1">Create New product</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection


@section('scripts')

@endsection
