@extends('layouts.primary')

@section('content')

  <h1>Creation</h1>
  <!-- define variables and set to empty values -->

    <div class="card">
      <div class="card-header">Post Creator</div>
      <div class="card-body">

          <form method="post" action="{{ action('PostController@store') }}" accept-charset="UTF-8">

            <!-- <input name="_token" type="hidden" value="{{ csrf_token() }}"/> -->
            {{ csrf_field() }}

            <div class="form-group col-md-8 col-lg-8">
              <label for="title">Title</label>
              <input value required="required" type="text" class="form-control" placeholder="Title" name="title" value required="required" autofocus="autofocus">
            </div>

            <div class="form-group col-md-12 col-lg-12">
              <label for="body">Body</label>
              <textarea id="mod-ckeditor" value required="required" class="form-control" placeholder="Message" name="body" cols="50" rows="10" id="body" style="margin-top: 0px; margin-bottom: 0px; height: 172px;"></textarea>
            </div>

            <div class="form-group col-md-12 col-lg-12">
                <a href="/post" class="btn btn-secondary">Return</a>
                <button type="submit" class="btn btn-success">Create</button>
            </div>

          </form>
      </div><!-- END CARD BODY  -->
    </div><!-- END CARD CONTENT -->

@endsection
