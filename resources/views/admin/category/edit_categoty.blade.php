@extends('layouts.backend.backend-app')
@section('title', 'Update Categories')
@section('content')

<section class="inner-contents">
    <p class="breadcrumb"><a href="{{ route('category.index') }}">Category</a>/ Update Category</p>

    <div class="product-add-sections">
      <div class="row">
        <div class="col-md-6 m-auto">
          <div class="add-category">
            <h5 class="add-header">
              Update Categories
            </h5>
            <form action="{{ route('category.update', $category->id) }}" method="post">
            @csrf
            @method('put')
                <input name="category_name" type="text" class="custom-input" placeholder="Category name" value="{{ $category->category_name }}">
                @error('category_name')
                    <p  class="text-danger">{{ $message }}</p>
                @enderror
                <div class="py-2 text-end">
                <button type="submit" class="category-button btn">
                   Update categories
                </button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
