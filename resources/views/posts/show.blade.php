@extends('layouts.app')

@section('content')

<div class="container d-flex justify-content-center align-items-center py-3" style="box-shadow:3px 3px 3px 3px LightGray">
    <div class="row">
        <div class="col-8" style="width:30vw">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4" style="width:20vw">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="{{ $post->user->profile->profileImage() }}" class="rounded-circle w-100" style="max-height:50px">
                    </div>
                    <div>
                      <div class="font-weight-bold">
                        <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                          <span class="text-dark">{{ $post->user->username }}</span>
                        </a>
                        <a href="#" class="text-decoration-none btn btn-outline-primary ps-2">Follow</a>
                      </div>
                    </div>
                </div>

                <div class="d-flex">
                    <div class="me-2">
                        <a href="/profile/{{ $post->user->id }}" class="text-decoration-none">
                           <h6>{{ $post->user->username }}</h6>
                       </a>
                    </div>
                    <p>{{ $post->caption }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
