@extends('layouts.backend.backend-app')
@section('title','Update User')
@section('content')

<section class="inner-contents">
    <p class="breadcrumb"><a href="{{ route('admin.dashboard') }}">Dashboard</a>/ User Update</p>

    <div class="user-input m-auto ms-lg-5">
      <form action="{{ route('admin.user.update', $user->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="text-center py-2">
          <img style="width: 150px; height:150px; border-radius:50%;" src="{{ (!empty($user->image)) ? asset($user->image): asset('backend/assets/images/upload/profile_img.png') }}" alt="pp" class="img-fluid">
        </div>

        <input name="name" id="name" type="text" class="custom-input" placeholder="Name" value="{{ $user->name }}">
        @error('name')
            <p  class="text-danger">{{ $message }}</p>
        @enderror

        <input name="sur_name" type="text" class="custom-input" placeholder="Surname" value="{{ $user->sur_name }}">
        @error('sur_name')
            <p  class="text-danger">{{ $message }}</p>
        @enderror

        <input name="city" type="text" class="custom-input" placeholder="City" value="{{ $user->city }}">
        @error('city')
            <p  class="text-danger">{{ $message }}</p>
        @enderror

        <div class="row">
          <div class="col-md-6">
            <input name="country_code" type="text" class="custom-input" placeholder="Code" value="{{ $user->country_code }}">
            @error('country_code')
                <p  class="text-danger">{{ $message }}</p>
            @enderror
        </div>
          <div class="col-md-6">
            <input name="phone" type="text" class="custom-input" placeholder="Phone" value="{{ $user->phone }}">
            @error('phone')
                <p  class="text-danger">{{ $message }}</p>
            @enderror
          </div>
        </div>

        <input name="email" id="email" type="email" class="custom-input" placeholder="Email" value="{{ $user->email }}">
        @error('email')
            <p  class="text-danger">{{ $message }}</p>
        @enderror

        {{-- <input name="password" id="password" type="password" class="custom-input" placeholder="Password"> --}}
        <div class="d-flex justify-content-end pt-3 pt-md-5">
            <button class="btn cancel-button">Cancel</button>
            <button type="sumbit" class="btn add-button">Save</button>
        </div>
      </form>
    </div>
  </section>

@endsection
