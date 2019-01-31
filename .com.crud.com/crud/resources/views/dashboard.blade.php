@extends('layouts.primary')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="jumbotron" style="margin-bottom:0">
                  <div class="row">
                    <div class="col-8">
                      <h1>Dashboard</h1>
                      <p>Welcome To The Dashboard <b>{{ Auth::user()->name }}</b>!</p>
                    </div>
                    <div class="col-4">
                      <img src="https://i.stack.imgur.com/dr5qp.jpg">

                    </div>
                  </div>


                </div>

                <!-- <div class="card-header">Dashboard</div> -->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <button onclick="location.href = '/post/create';" class="btn btn-success ">Create new post</button>
                    <button onclick="location.href = '';" class="btn btn-success ">Edit Profile Picture</button>
                    <br><br>
                    @if( count($allPosts)  > 0 )
                      <table class="table table-hover">
                        <tr>
                          <thead>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Action</th>
                          </thead>
                          <tbody>
                            @foreach($allPosts as $post)
                              <tr>
                                <td>{{$post->title}}</td>
                                <td>
                                    @if($post->created_at != $post->updated_at)
                                      <small>Edited on {{$post->updated_at}}</small>
                                    @else
                                      <small>Posted on {{$post->created_at}}</small>
                                    @endif
                                </td>
                                <td>

                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                    <div class="btn-group mr-2" role="group" aria-label="First group">
                                      <button onclick="location.href = '/post/{{$post->id}}' ;" class="btn btn-primary">View</button>
                                      <button onclick="location.href = '/post/{{$post->id}}/edit' ;" class="btn btn-secondary">Edit</button>
                                    </div>
                                    <div class="btn-group mr-2" role="group" aria-label="Second group">
                                      <form class="float-sm-right" method="POST" action="{{ action('PostController@destroy', $post->id ) }}" accept-charset="UTF-8">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                      </form>
                                    </div>
                                  </div>


                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </tr>
                      </table>
                      @else
                      <p>You have no posts!</p>
                      @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
