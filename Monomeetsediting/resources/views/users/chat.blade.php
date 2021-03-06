@extends('layouts.app')

@section('content')
    <div class="row">
       
        <div class="col-xs-8">
            
             
                  {!! Form::open(['route' => 'posts.store']) !!}
                      <div class="form-group">
                          {!! Form::textarea('saying', old('saying'), ['class' => 'form-control', 'rows' => '2']) !!}
                          {!! Form::submit('Post', ['class' => 'btn btn-success btn-block']) !!}
                      </div>
                  {!! Form::close() !!}
            
            @if (count($posts) > 0)
                @include('posts.posts', ['posts' => $posts])
            @endif
        
    </div>
@endsection
