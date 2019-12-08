@extends('layouts.app')

@section('title', 'Add Post')

@section('content')
  <section class="mt-5">
    <form action="{{ url('posts/'.$post->id)}}" method="post">
      @method('PUT')
      @csrf
      <div class="form-group">
        <label>title</label>
        <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $post->title }}">
      </div>
      <div class="form-group">
        <label>Content</label>
        <input type="text" class="form-control" name="content" placeholder="Content" value="{{ $post->content }}">
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="status" @if ($post->status == 1) { checked="checked" } @endif>
        <label class="form-check-label">Status</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </section>
@endsection
