@extends('layouts.primary')


@section('content')

  <h1>Edit #{{$post->id}}</h1>

  <div class="card">
    <div class="card-header">Post Creator</div>
    <div class="card-body">

        <form method="POST" action="{{ action('PostController@update', $post->id ) }}" accept-charset="UTF-8">

          <!-- <input name="_token" type="hidden" value="{{ csrf_token() }}"/> -->
          {{ csrf_field() }}

          <!-- <input type="hidden" name="_method" value="PUT"> -->
          {{ method_field('PUT') }}

          <div class="form-group col-md-8 col-lg-8">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}" value required="required" autofocus="autofocus">
          </div>

          <div class="form-group col-md-12 col-lg-12">
            <label for="body">Body</label>

            <textarea id="mod-ckeditor" value required="required" class="form-control" name="body" cols="50" rows="10" id="body" style="margin-top: 0px; margin-bottom: 0px; height: 172px;">
              {!!$post->body!!}
            </textarea>
          </div>

          <div class="form-group col-md-12 col-lg-12">
              <a href="/post" class="btn btn-secondary">Return</a>
              <a href="/post/{{$post->id}}/edit" class="btn btn-secondary">Reset</a>
              <button type="submit" class="btn btn-success">Save</button>
              <!-- <form class="float-sm-right" method="POST" action="{{ action('PostController@destroy', $post->id ) }}" accept-charset="UTF-8">
                {{ csrf_field() }}
                {{ method_field('delete') }}
                <button type="submit" class="btn btn-danger">Delete</button>
              </form> -->
          </div>

        </form>
    </div><!-- END CARD BODY  -->
  </div><!-- END CARD CONTENT -->
@endsection
