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

  
    
    <div class="form-group row">
        <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Nama Anda') }}</label>

        <div class="col-md-6">
            
            <textarea placeholder="" class="form-control" id="nominal" name="atas_nama" rows="2" readonly="">{{$user->name}}</textarea>

            @if ($errors->has('nama'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <form method="POST" action="/topups" enctype="multipart/form-data">

    <div class="form-group row">
        <label for="nama" class="col-md-4 col-form-label text-md-right">{{ __('Atas Nama') }}</label>

        <div class="col-md-6">
            <input id="nama" type="text" class="form-control{{ $errors->has('nama') ? ' is-invalid' : '' }}" name="nama" value="{{ old('nama') }}" required>

            @if ($errors->has('nama'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nama') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="nominal" class="col-md-4 col-form-label text-md-right">{{ __('Masukkan nominal saldo untuk Top Up') }}</label>

        <div class="col-md-6">
            <input id="nominal" type="number" class="form-control{{ $errors->has('nominal') ? ' is-invalid' : '' }}" name="nominal" value="{{ old('nominal') }}" required>

            @if ($errors->has('nominal'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nominal') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="bank" class="col-md-4 col-form-label text-md-right">{{ __('Bank yang anda gunakan') }}</label>

        <div class="col-md-6">
            <input id="bank" type="text" class="form-control{{ $errors->has('bank') ? ' is-invalid' : '' }}" name="bank" value="{{ old('bank') }}" required>

            @if ($errors->has('bank'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bank') }}</strong>
                </span>
            @endif
        </div>
    </div>

     <!-- Featured Image -->
     <div class="form-group row">
          <label for="nominal" class="col-md-4 col-form-label text-md-right">{{ __('Submit Bukti') }}</label>

          <div class="col-md-6">
              <input id="bukti_image" type="file" class="form-control{{ $errors->has('bukti_image') ? ' is-invalid' : '' }}" name="bukti_image" value="{{ old('bukti_image') }}" required>

              @if ($errors->has('bukti_image'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('bukti_image') }}</strong>
                  </span>
              @endif
          </div>
      </div>

    {{ csrf_field() }}

    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('TOP UP') }}
            </button>

            <a class="btn btn-light" href="/home">
                {{ __('Batal') }}
            </a>
        </div>
    </div>
  </form>

</div>
@endsection
