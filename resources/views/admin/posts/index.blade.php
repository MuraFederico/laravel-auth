@extends('layouts.app')

@section('title', 'Posts')

@section('content')
    @foreach ($posts as $post)
    <div class="container posts-content">
        <div class="row">
            <div class="col-lg-6">
                <div class="card mb-4">
                  <div class="card-body">
                    <div class="media mb-3">
                      <img src="{{ $post->media }}" class="d-block ui-w-40 rounded-circle" alt="">
                      <div class="media-body ml-3">
                        Kenneth Frazier
                        <div class="text-muted small">3 days ago</div>
                      </div>
                    </div>

                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus finibus commodo bibendum. Vivamus laoreet blandit odio, vel finibus quam dictum ut.
                    </p>
                    <a href="javascript:void(0)" class="ui-rect ui-bg-cover" style="background-image: url('https://bootdey.com/img/Content/avatar/avatar3.png');"></a>
                  </div>
                  <div class="card-footer">
                    <a href="javascript:void(0)" class="d-inline-block text-muted">
                        <strong>123</strong> Likes</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                        <strong>12</strong> Comments</small>
                    </a>
                    <a href="javascript:void(0)" class="d-inline-block text-muted ml-3">
                      <small class="align-middle">Repost</small>
                    </a>
                  </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
