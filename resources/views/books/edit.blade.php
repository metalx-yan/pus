@extends('main')

@section('title', 'Buat Buku Baru')

@section('stylesheets')
  <link rel="stylesheet" href="{{ url('css/style.css') }}">
@endsection

@section('content')
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

  <div class="row">
    <div class="col-md-10">
      <h4><p><b>Buku Baru</b></p></h4>
    </div>


    <div class="col-md-10 offset-md-2">
      <form class="form" action="{{ route('books.update', $edit->slug) }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <div class="row">
          <div class="col-md-6 offset-md-8">
              <input type="submit" class="btn btn-success" name="" value="Edit Buku">
              <a href="{{ route('books.index') }}" class="btn btn-danger">Batal</a>
            </div>
        </div>
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-2 col-form-label">Judul</label>
          <div class="col-md-6">
            <input type="text" name="judul" class="form-control" id="staticEmail" value="{{ $edit->judul }}">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-2 col-form-label">Review</label>
          <div class="col-md-6">
            <textarea name="review" rows="8" cols="80" class="form-control">{{ $edit->review }}</textarea>
            {{-- <input type="textarea" class="form-control" id="inputPassword" placeholder=""> --}}
          </div>
        </div>
      </form>
    </div>

    <div class="col-md-12">
      <hr>
    </div>
  </div>
@endsection
