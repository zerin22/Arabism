@extends('layouts.backend.backend-app')
@section('title','All User')
@section('content')
<section class="inner-contents">
    <p class="breadcrumb"><a href="{{ route('admin.dashboard') }}">Dashboard</a>/ Product</p>

    <div class="add-user d-flex align-items-center justify-content-between">
      <div class="left">
        <button class="btn me-3">
          <form class="search-bar">
            <input class="form-control" type="text" placeholder="search">
          </form>
      </div>
      <div class="right">
        <a href="{{ route('category.product.create') }}" class="btn button-green">
          Add
        </a>
      </div>
    </div>

    <div class="user-table">
      <div class="table-responsive-lg">
        <table class="table">
          <thead>
            <tr>
              <th>Name</th>
              <th>Category</th>
              <th>Price</th>
              <th>Code</th>
              <th>Status</th>
              <th>Image</th>
              <th>Stored</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="table-body">
            @forelse ($products as $product)
            <tr>
                <td class="d-flex align-items-center text-nowrap">
                  <img src="{{asset('backend/products/categ.png')}}" alt="q" class=" me-2 img-fluid">
                  <span class="name me-1">{{$product->product_name ?? ''}}</span>
                </td>
                <td>
                  <p class="email text-nowrap">{{$product->relationWithCategory->category_name}}</p>
                </td>
                <td>
                  <p class="date">{{$product->price ?? ''}}</p>
                </td>
                <td>
                  <p class="date">{{$product->code ?? ''}}</p>
                </td>
                <td>
                  <select class="select-opt p-1 optionChange">
                    <option value="1" {{$product->status == 1 ? 'Active' : 'InActive'}}>Active</option>
                    <option value="0" {{$product->status != 1 ? 'InActive' : 'Active'}}>InActive</option>
                  </select>
                </td>
                <td>
                  <img src="{{asset($product->image ?? '')}}" alt="Image NOt Found" width="100px">
                </td>
                <td>
                  <p style="cursor: pointer; text-decoration: underline" class="date" data-bs-toggle="modal"
                    data-bs-target="#staticBackdropdate">{{ \Carbon\Carbon::parse($product->created_at)->diffForHumans() }}</p>
                </td>
                <td class="text-nowrap">
                  <button class="btn button-blue ">
                    Edit
                  </button>
                  <button class="btn button-red" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Remove
                  </button>
                </td>
              </tr>
              <tr>
                <td class="blank"></td>
              </tr>
            @empty

            @endforelse


          </tbody>
        </table>
      </div>
    </div>

    <div class="pagination d-flex justify-content-end pt-3">
      <div>
        <button class="btn nav-btn"><i class="fas fa-chevron-left"></i></button>
        <button class="btn nav-btn active">1</button>
        <button class="btn nav-btn">2</button>
        <button class="btn nav-btn">3</button>
        <button class="btn nav-btn">4</button>
        <button class="btn nav-btn">5</button>
        <button class="btn nav-btn"><i class="fas fa-chevron-right"></i></button>
      </div>
    </div>
  </section>
@endsection
\
@section('scripts')
    <script>
      $(document).ready(function(){ 
        $('.optionChange').change(function(){
          let val = $(this).val();
          alert(val);
        })
      })
    </script>
@endsection
