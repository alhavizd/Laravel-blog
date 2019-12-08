@extends('layouts.app')

@section('title', 'Posts')

@section('content')
  <section class="mt-5">
    <a href="{{ url('posts/add')}}" class="btn btn-primary">Add new</a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Title</th>
          <th scope="col">Content</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($post as $posts)
          <tr>
            <td>{{ $posts->title }}</td>
            <td>{{ $posts->content }}</td>
            <td>
              @if ($posts->status == 1)
                <span>Aktif</span>
              @else
                <span>Tidak Aktif</span>
              @endif
            </td>
            <td>
              <a href="#" class="btn btn-sm btn-primary">View</a>
              <a href="{{ url('posts/edit/'. $posts->id)}}" class="btn btn-sm btn-warning">Edit</a>
              <a href="#" class="btn btn-sm btn-danger">Delete</a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </section>
@endsection
