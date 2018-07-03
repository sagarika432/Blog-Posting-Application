@extends('layouts.app')

@section('content')
<a href="/lsapp/public/posts" class="btn btn-outline-secondary"> Go Back </a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%"src="/lsapp/public/storage/cover_images/{{$post->cover_image}}">
    <br><br><br>
    <div>
       <h4> {!! $post->body !!} </h4>
        {{-- {{$post->body}} --}}
    </div>
    <hr>
    <small> Written on {{$post->created_at}} by  {{ $post->user->name}}</small>
    <br/>
    <small> Last updated on {{$post->updated_at}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

            {!!Form::open(['action' =>['PostsController@destroy',$post->id],'method' =>'POST','class' => 'float-right']) !!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection