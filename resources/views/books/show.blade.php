@extends('main')

@section('title', 'Show')

@section('content')
<p>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <p>
      <a href="{{ route('books.index') }}" class="btn btn-primary col-md-2 offset-md-10">Kembali</a>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Review</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $show->id }}</th>
            <td>{{ $show->judul }}</td>
            <td>{{ $show->review }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

@endsection
