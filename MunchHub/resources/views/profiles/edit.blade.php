@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="row">
                        <h2>Edit profile</h2>
                    </div>

                    <div class="form-group row">
                        <label for="profile_text" class="col-md-4 col-form-label">Profile text</label>
                        <textarea name="profile_text" id="profile_text" cols="30" rows="8" class="form-control @error('profile_text') is-invalid @enderror" autocomplete="profile_text" autofocus> {{ old('profile_text') ?? $user->profile->profile_text }}</textarea>

                        {{--<input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}"  autocomplete="description" autofocus>--}}
                        @error('profile_text')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label">Website URL</label>
                        <input id="url" type="text" class="form-control @error('url') is-invalid @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="url" autofocus>
                        @error('url')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

                    </div>
                    <div class="form-group row">
                        <label for="tags" class="col-md-4 col-form-label">Tags</label>
                        <input id="tags" type="text" class="form-control @error('tags') is-invalid @enderror" name="tags" value="{{ old('tags') ?? $user->profile->tags }}"  autocomplete="tags" autofocus>
                        @error('tags')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="row">
                    <label for="image" class="col-md-12 col-form-label">Profile image</label></br>
                        <img id="imgPreview" alt="" class="w-25 pb-2" src="{{ isset($user->profile->image) ? "/storage/".$user->profile->image : '/storage/uploads/defaultprofile.jpg' }}">
                        <input type="file" class="form-control-file pb-2" name="image" id="image" onchange="loadImage(event)">
                        @error('image')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row pt-2">
                        <button class="btn btn-primary">Save profile</button>
                    </div>
                </div>
            </div>
        </form>    </div>


{{--    <input type="text" id="address"/>@section('scripts')
    @parent
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBOizX4HtUy_0x0SzBIUhqzNbxtUCQ1uoI&libraries=places"></script>
    <script>
        var input = document.getElementById('address');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function(){
            var place = autocomplete.getPlace();
        })
    </script>
@stop--}}

@endsection
