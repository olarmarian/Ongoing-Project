@extends('layouts.app')

@section('content')
<div class="container">
        <form action="/profile/local/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
    
            <div class="col-8 offset-2 pt-4">
                <div><h1>Modifica Profilul</h1></div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Nume</label>
    
                    <input id="name"
                            type="text"
                            class="form-control{{ $errors->has('name') ? 'is-invalid' : '' }}" 
                            name="name"
                            value="{{ old('name') ?? $user->profile->name }}" 
                            required autocomplete="name" autofocus>
    
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
    
                </div>
            
                <div class="form-group row">
                    <label for="phone" class="col-md-4 col-form-label">Telefon</label>
    
                    <input id="phone"
                            type="text"
                            class="form-control{{ $errors->has('descphoneription') ? 'is-invalid' : '' }}" 
                            name="phone"
                            value="{{ old('phone') ?? $user->profile->phone }}" 
                            required autocomplete="phone" autofocus>
    
                    @if ($errors->has('phone'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span>
                    @endif
    
                </div>
    
                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label">Email</label>
    
                    <input id="email"
                            type="text"
                            class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }}" 
                            name="email"
                            value="{{ old('email') ?? $user->profile->email }}" 
                            required autocomplete="email" autofocus>
    
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
    
                </div>

                <div class="form-group row">
                        <label for="menu" class="col-md-4 col-form-label">Meniu</label>
        
                        <textarea id="menu"
                                type="text"
                                class="form-control{{ $errors->has('menu') ? 'is-invalid' : '' }}" 
                                name="menu"
                                rows="20"
                                value="{{ $user->profile->menu }}" 
                                required autocomplete="menu" autofocus></textarea>
        
                        @if ($errors->has('menu'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('menu') }}</strong>
                            </span>
                        @endif
                </div>
    
                <div class="row">
                <label for="image" class="col-md-4 col-form-label">Imaginea Profilului</label>
                    <input type="file" class="form-control-file" id="image" name="image">
                    @if ($errors->has('image'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('image') }}</strong>
                        </span>
                    @endif
    
                </div>
                <div class="row pt-4">
                    <button class="btn btn-primary">Salveaza Profil</button>
    
                </div>
            </div>
        </form>
    
</div>
@endsection
