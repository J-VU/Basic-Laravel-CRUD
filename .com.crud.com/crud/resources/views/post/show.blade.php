@extends('layouts.primary')


@section('content')

  <div class="card">
    <div class="card-header">{{$post->title}}</div>
    <div class="card-body">

          <div class="form-group col-md-8 col-lg-8">

            <p class="" name="message" id="message" style="margin-top: 0px; margin-bottom: 0px;">
                {!!$post->body!!}
            </p>
            <small><b>{{$post->user->name}}</b> posted on {{$post->created_at}}</small>
          </div>


          <div class="form-group col-md-12 col-lg-12">
              @guest
                <a href="/post" class="btn btn-secondary">Return</a>
              @else
                <a href="/dashboard" class="btn btn-secondary">Return</a>
                <a href="/post/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                <form class="float-sm-right" method="POST" action="{{ action('PostController@destroy', $post->id ) }}" accept-charset="UTF-8">
                  {{ csrf_field() }}
                  {{ method_field('delete') }}
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              @endguest
          </div>

    </div><!-- END CARD BODY  -->
  </div><!-- END CARD CONTENT -->

@endsection
