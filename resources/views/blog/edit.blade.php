@extends('master')
  @section('content')
  <div class="row">
    <div class="col-md-12">
      <h1>Edit data</h1>

    </div>
  </div>
  <div class="row">
    <form class="" action="{{route('blog.update', $blog->id)}}" method="post">
      <input type="hidden" name="_method" value="PATCH">
      {{csrf_field()}}
      <div class="form-group{{ ($errors->has('title')) ? $errors->first('title') : '' }}">

        <input type="text" name="title" class="form-control" id="" placeholder="Enter title here" value="{{$blog->title}}">
        {!! $errors->first('title','<p class="help-block">:message</p>')  !!}

      </div>
      <div class="form-group{{ ($errors->has('description')) ? $errors->first('description') : '' }}">

        <input type="text" name="description" class="form-control" id="" placeholder="Enter description here" value="{{$blog->description}}">
        {!! $errors->first('description','<p class="help-block">:message</p>')  !!}

      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary" id="" value="save">

      </div>



    </form>
  </div>





  @stop
