@extends('template')
@section('content')
    <section class="main-section">
      <div class="content">
        <h1>Tambah Kontak</h1>
        <hr>
        @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
          <li><strong>{{ $error }}</strong>
          @endforeach
        </div>
        @endif

        <form action="{{ route('kontak.store') }}" method="post">
          {{ csrf_field() }}
          <div class="from-group">
            <label for="nama">Nama:</label>
            <input type="text" class="form-control" id="usr" name="nama">
          </div>
          <div class="from-group">
            <label for="nama">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="from-group">
            <label for="nama">No Hp::</label>
            <input type="text" class="form-control" id="nohp" name="nohp">
          </div>
          <div class="from-group">
            <label for="nama">Alamat:</label>
            <textarea class="form-control" id="alamat" name="alamat"></textarea>
          </div>
          <div class="from-group">
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            <button type="reset" class="btn btn-md btn-danger">Cancel</button>
          </div>
        </form>
      </div>
    </section>
    @endsection
