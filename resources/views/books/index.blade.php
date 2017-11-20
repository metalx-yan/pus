@extends('main')

@section('title', 'Book')

@section('stylesheets')
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
@endsection

@section('content')
  <div class="row">
    <div class="col-md-10">
      <h4><p><b>Semua Buku</b></p></h4>
    </div>

    <div class="col-md-2">
      <a href="{{ route('books.create') }}" class="btn btn-success">Tambah Buku</a>
    </div>

    <div class="col-md-12">
      <p>
    </div>

    <div class="col-md-12">
      <table class="table">
        <thead class="table-active">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Judul</th>
            <th scope="col">Opsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($index as $indexis)
            <tr>
              <td>{{ $indexis->id }}</td>
              <td>{{ $indexis->judul }}</td>
              <td>
                <div class="row">
                  <div class="col-md-2">
                    <a href="{{ route('books.show', $indexis->slug) }}" class="btn btn-secondary">Lihat</a>
                  </div>
                  <div class="col-md-2">
                    <a href="{{ route('books.edit', $indexis->slug) }}" class="btn btn-primary">Edit</a>
                  </div>
                  <div class="col-md-2">
                    <form action="{{ route('books.show', $indexis->judul) }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <input type="submit" name="" value="Hapus" class="btn btn-danger">
                    </form>
                  </div>
                </div>
              </td>

            </tr>
          @endforeach

        </tbody>
      </table>
    </div>

    <div class="col-md-3 offset-md-5">
      {{$index->render("pagination::bootstrap-4")}}
    </div>

    <div class="col-md-12">
      <hr>
    </div>
  </div>
@endsection
