@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/p" enctype="multipart/form-data" method="post">
    @csrf
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row">
                    <h2>Add new post</h2>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post caption</label>
                    <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus>
                    @error('caption')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-md-12 col-form-label">Post image</label></br>
                    <img id="imgPreview" alt="" class="w-25 pb-2" src="{{ isset($user->profile->image) ? "/storage/".$user->profile->image : '/storage/uploads/defaultprofile.jpg' }}">

                    <input type="file" class="form-control-file" name="image" id="image" onchange="loadImage(event)">
                    @error('image')
                                        <strong>{{ $message }}</strong>

                    @enderror
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary">Add new post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection