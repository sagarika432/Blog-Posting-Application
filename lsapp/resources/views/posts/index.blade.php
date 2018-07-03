@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    
    @if(count($posts) >= 1)
        @foreach($posts as $post)
        <div class="card">
                <h3 class="card-header"><a href="/lsapp/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <div class="card-body">
                    
                  {{-- <h5 class="card-title">Posted on : {{$post->created_at}} by  {{ $post->user->name}}</h5>
                  <h5 class="card-title">Last updated on : {{$post->updated_at}}</h5> --}}
                  
                  <div class="row">
                      <div class="col-md-4 col-sm-4">
                        <img style="width:100%"src="/lsapp/public/storage/cover_images/{{$post->cover_image}}">
                      </div>
                      <div class="col-md-4 col-sm-8">
                            <h5 class="card-title">Posted on :{{$post->created_at}} by  {{ $post->user->name}}</h5>
                            <h5 class="card-title">Last updated on : {{$post->updated_at}}</h5>
                            <p class="card-text">Click to see the full post ..!!!</p>
                        </div>
                  </div>
                  
                  
                </div>
                
        </div>
        <br/>
        
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found </p>
    @endif
@endsection