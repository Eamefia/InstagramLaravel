@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center align-items-center">
    @foreach($posts as $post)
      <div>
        <div class="p-3 m-3" style="width:50vw;border:1px solid grey">
        <p>
            <div class="ps-2">
                <a href="/profile/{{ $post->user->id }}" class="d-flex align-items-center text-decoration-none">
                  <div class="pe-3">
                      <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="height:40px;width:40px">
                  </div>
                  <h6 class="text-dark">{{ $post->user->username }}</h6>
                </a>
            </div>
        </p>
        <a href="/profile/{{ $post->user->id }}"><img src="/storage/{{ $post->image }}" class="w-100"></a>
        <p class="font-weight-bold">{{ $post->caption }}</p>
       </div>
     <div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
        </div>
    </div>
</div>
@endsection
