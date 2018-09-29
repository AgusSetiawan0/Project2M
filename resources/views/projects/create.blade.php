@extends('layouts.app')

@section('content')
<div class="container">

    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li> {{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="/projects" enctype="multipart/form-data">

      <div class="form-group row">
          <label for="judul" class="col-md-4 col-form-label text-md-right">{{ __('Judul Proyek') }}</label>

          <div class="col-md-6">
              <input id="judul" type="text" class="form-control{{ $errors->has('judul') ? ' is-invalid' : '' }}" name="judul" value="{{ old('judul') }}" required>

              @if ($errors->has('judul'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('judul') }}</strong>
                  </span>
              @endif
          </div>
      </div>


      <div class="form-group row">
          <label for="dibuat" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal dibuat') }}</label>

          <div class="col-md-6">
              <input id="dibuat" type="date" class="form-control{{ $errors->has('dibuat') ? ' is-invalid' : '' }}" name="dibuat" value="{{ old('dibuat') }}" required>

              @if ($errors->has('dibuat'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('dibuat') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group row">
          <label for="ditutup" class="col-md-4 col-form-label text-md-right">{{ __('Tanggal ditutup') }}</label>

          <div class="col-md-6">
              <input id="ditutup" type="date" class="form-control{{ $errors->has('ditutup') ? ' is-invalid' : '' }}" name="ditutup" value="{{ old('ditutup') }}" required>

              @if ($errors->has('ditutup'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('ditutup') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group row">
          <label for="deskripsi" class="col-md-4 col-form-label text-md-right">{{ __('Deskripsi Project') }}</label>

          <div class="col-md-6">
              <textarea rows="4" cols="50" style="resize:none" id="deskripsi" type="text" class="form-control{{ $errors->has('deskripsi') ? ' is-invalid' : '' }}" name="deskripsi" value="{{ old('deskripsi') }}" required></textarea>
              @if ($errors->has('deskripsi'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('deskripsi') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group row">
          <label for="jumlah_uang" class="col-md-4 col-form-label text-md-right">{{ __('Jumlah Uang yang Dibutuhkan') }}</label>

          <div class="col-md-6">
              <input id="jumlah_uang" type="number" class="form-control{{ $errors->has('jumlah_uang') ? ' is-invalid' : '' }}" name="jumlah_uang" value="{{ old('jumlah_uang') }}" required>

              @if ($errors->has('jumlah_uang'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('jumlah_uang') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <div class="form-group row">
          <label for="slot" class="col-md-4 col-form-label text-md-right">{{ __('Banyak Slot') }}</label>

          <div class="col-md-6">
              <input id="slot" type="number" class="form-control{{ $errors->has('slot') ? ' is-invalid' : '' }}" name="slot" value="{{ old('slot') }}" required>

              @if ($errors->has('slot'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('slot') }}</strong>
                  </span>
              @endif
          </div>
      </div>

      <!-- Featured Image -->
      <div class="form-group row">
          <label for="slot" class="col-md-4 col-form-label text-md-right">{{ __('Submit Gambar') }}</label>

          <div class="col-md-6">
              <input id="featured_image" type="file" class="form-control{{ $errors->has('featured_image') ? ' is-invalid' : '' }}" name="featured_image" value="{{ old('featured_image') }}" required>

              @if ($errors->has('featured_image'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('featured_image') }}</strong>
                  </span>
              @endif
          </div>
      </div>


      {{ csrf_field() }}


      <div class="form-group row mb-0">
          <div class="col-md-6 offset-md-4">
              <button type="submit" class="btn btn-primary">
                  {{ __('Buat Project') }}
              </button>

              <a class="btn btn-light" href="/admin">
                  {{ __('Kembali') }}
              </a>
          </div>
      </div>

    </form>
</div>
@endsection
