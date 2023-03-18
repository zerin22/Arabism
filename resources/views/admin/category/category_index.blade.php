@extends('layouts.backend.backend-app')
@section('title', 'All Categories')
@section('content')

<section class="inner-contents">
    <p class="breadcrumb"><a href="{{ route('admin.dashboard') }}">Dashboard</a>/ Category</p>

    <div class="user-table">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Name of Categories</th>
              <th>Created</th>
              <th class="text-end">
                <a href="{{ route('category.product.create') }}" class="btn button-green">
                  Add
                </a>
              </th>
            </tr>
          </thead>
         
          <tbody class="table-body">   
          @foreach ($categories as $category)
            <tr>
              <td class="d-flex align-items-center">
                <span class="name">{{ $category->category_name }}</span>
              </td>
              <td>
                <p class="date">{{ \Carbon\Carbon::parse($category->created_at)->diffForHumans() }}</p>
              </td>
              <td class="text-end text-nowrap">
                <a href="{{ route('category.edit', $category->id) }}" class="btn button-blue">
                  Edit
                </a>
                <button class="btn button-red" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $category->id }}">
                  Remove
                </button>
              </td>
              <!-- Modal -->
              <div class="confirmation-modal">
                <div class="modal fade" id="staticBackdrop{{ $category->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                  aria-labelledby="staticBackdropLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-body">
                        <h4>
                          Are you sure You want to
                          Remove this <span>Category</span> ?
                        </h4>
                          <br> <br>
                        <div class="text-center">
                          <button type="button" class="btn cancel-buton" data-bs-dismiss="modal">Cancel</button>
                          <a href="{{ route('category.destory', $category->id) }}" type="button" class="btn create-buton">Yes</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </tr>
          @endforeach
          </tbody>
          
        </table>
        @if(count($categories) == 0)
          <h4 class="text-center">No Data Found</h4>
        @endif
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
