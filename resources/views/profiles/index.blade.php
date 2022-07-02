@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-3 p-5">
          <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100" />
       </div>
       <div class="col-9 pt-5">
          <div calss="d-flex justify-content-between align-items-baseline">
              <div class="d-flex align-items-center pb-3">
                <div class="h3">{{ $user->username }}</div>
                <follow-button follows="{{$follow }}" user-id="{{ $user->id }}"></follow-button>
              </div>
              <div class="d-flex align-items-center">
                 @can('update', $user->profile)
                   <a href="/p/create" class="btn btn-outline-primary me-4">Add Post</a>
                 @endcan

                @can('update', $user->profile)
                  <a href="/profile/{{ $user->id }}/edit" class="btn btn-outline-primary">Edit Profile</a>
                @endcan
              </div>
         </div>
          <div class="d-flex">
              <div class="pe-5"><strong>{{ $postCount }}</strong> posts</div>
              <div class="pe-5"><strong>{{ $followersCount }}</strong> followers</div>
              <div class="pe-5"><strong>{{ $followingCount }}</strong> following</div>
          </div>
          <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
          <div>
          {{ $user->profile->description }}
          </div>
          <div><a href="#">{{ $user->profile->url }}</a></div>
       </div>
    </div>
    <hr />
    <div class="d-flex flex-wrap pt-5">
        @foreach($user->posts as $post)
        <div class="col-4 p-2">
            <a href="/p/{{$post->id}}">
              <img src="/storage/{{ $post->image }}" class="w-100" style="box-shadow:3px 3px 3px 3px LightGray" />
            <a>
        </div>
        @endforeach
    </div>
</div>
@endsection
