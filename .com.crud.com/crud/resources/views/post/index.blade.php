@extends('layouts.primary')


@section('content')

<h1>Recent News</h1>

  <div class="form-group">
    @guest

    @else
      <button onclick="location.href = '/post/create';" class="btn btn-success ">Create</button>
    @endguest
  </div>

  @if(count($allPosts) > 0 )
    @foreach($allPosts as $post)

    <a href="post/{{$post->id}}" style="color: inherit;">
      <div class="card">
        <div class="card-header">
          {{$post->title}}
        </div>
        <div class="card-body">
          {!!$post->body!!}
          <div class="form-group col-md-8 col-lg-8">
            @if($post->created_at != $post->updated_at)
              <small><b>{{$post->user->name}}</b> edited on {{$post->updated_at}}</small>
            @else
              <small><b>{{$post->user->name}}</b> posted on {{$post->created_at}}</small>
            @endif

          </div>
        </div><!-- END CARD BODY  -->
      </div><!-- END CARD CONTENT -->
    </a>
    <br>

    @endforeach
    {{ $allPosts->links() }} <!-- PAGINATION LINKS -->
  @endif









  <!-- @if(count($allPosts) > 0 )
    @foreach($allPosts as $post)
      <div class="card">
        <h3><a href="post/{{$post->id}}">{{$post->title}}</a></h3>
        <small>{{$post->created_at}}</small>
        {{$post->body}}

      </div>
      <br>
    @endforeach
  @endif


  -->



@endsection
