@extends('layouts.backend.backend-app')
@section('title','All User')
@section('content')
  <!-- all codes for ===***users***=== starts from here -->
  <section class="inner-contents">
    <p class="breadcrumb"><a href="{{ route('admin.dashboard') }}">Dashboard</a> / User</p>

    <div class="add-user d-flex align-items-center justify-content-between">
      <div class="left">
        <button class="btn me-3">
          <img src="{{ asset('backend') }}/assets/images/UpDown.png" alt="ima" class=" img-fluid">
        </button>
        <button class="btn">
          <img src="{{ asset('backend') }}/assets/images/ccc.png" alt="ima" class="img-fluid">
        </button>
      </div>
      <div class="right">
        <button class="btn button-green">
          Add
        </button>
      </div>
    </div>

    <div class="user-table">
      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>User</th>
              <th>Created</th>
              <th>Status</th>
              <th>Email</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody class="table-body">
            <tr>
                @forelse ($users as $user)
                    <td class="d-flex align-items-center text-nowrap">
                        <img src="{{ asset('backend') }}/assets/images/avatata-2.png" alt="q" class=" me-2 img-fluid">
                        <span class="name">{{ $user->name }}</span>
                    </td>
                    <td>
                        <p class="date">{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</p>
                    </td>
                    <td>
                        @if( $user->status == 1)
                            <a href="{{ route('user.inactive', ['id' => $user->id]) }}"  class="btn button-blue">Inactive</a>
                        @else
                            <a href="{{ route('user.active', ['id' => $user->id]) }}" class="btn button-red">Active</a>
                        @endif
                        {{-- <select class="select-opt" name="status" id="">
                        <option value="1">Active</option>
                        <option value="0">InActive</option>
                        </select> --}}
                    </td>
                    <td>
                        <p class="email">{{ $user->name }}</p>
                    </td>
                    <td class="text-nowrap">
                        <a href="{{ route('user.edit', $user->id) }}" class="btn button-blue">Edit</a>
                        <button class="btn button-red" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{ $user->id }}">
                            Remove
                        </button>


                    </td>
                    </tr>
                    <tr>
                    <td class="blank"></td>
                    </tr>

                    <!-- Modal -->
                    <div class="confirmation-modal">
                        <div class="modal fade" id="staticBackdrop{{ $user->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                        aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                            <div class="modal-body">
                                <h4>
                                Are you sure You want to
                                Remove this <span>user</span> ?
                                </h4>
                                <br> <br>
                                <div class="text-center">
                                <button type="button" class="btn cancel-buton" data-bs-dismiss="modal">Cancel</button>
                                <a href="{{ route('user.destory', $user->id) }}"  class="btn create-buton">Yes</a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                @empty
                    <p>No User Registered!</p>
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

  <!-- all codes for ===***users***=== ended -->


@endsection
