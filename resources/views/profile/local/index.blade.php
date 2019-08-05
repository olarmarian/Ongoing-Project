@extends('layouts.app')

@section('content')
<div class="home-div" style="">     
    <div class="container">
        <div class="row">
            <div class="col-3 p-3">
                <img src="{{ $user->profile->profileImage() }}" alt="" class="rounded-pill w-100">
            </div>
            <div class="col-9 justify-content-center">
                <div class="d-flex justify-content-center pt-5">
                    <h1 style="color:black">{{ $user->profile->name }}</h1>
                </div>
                <div class="d-flex justify-content-around mt-3" style="font-size:22px">
                    @can('update',$user->profile)
                        <a href="/profile/local/{{ $user->id }}/edit" class="edit-profile font-weight-bold" style="color:black">Modifica profil</a>
                    @endcan
                    @can('update',$user->profile)
                        <a href="#" class="reservations font-weight-bold" style="color:black">Rezervari</a>
                    @endcan
                </div>
                <div class="mt-5" style="background-color:#d9b38c">
                    <p class="specific text-dark font-italic">Specific: {{$user->profile->specific ?? 'N/A'}}</p>
                    <p class="phone text-dark font-italic">Telefon: {{$user->profile->phone ?? 'N/A'}}</p>
                    <p class="email text-dark font-italic">Email: {{$user->profile->email ?? 'N/A'}}</p>
                    <p class="location text-dark font-italic">Locatie: {{$user->profile->location ?? 'N/A'}}</p>
                </div>
                <div class="d-flex justify-content-center">
                    <menu-button menu="{{$user->profile->menu}}"></menu-button>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
        <div class="row d-flex justify-content-center">
            <button class="btn btn-primary" disabled="disabled">Publica localul</button>
        </div>
    </div>
    <footer>
        <div class="follow py-3 pl-3">
            <p>Urmareste-ne pe:</p>
            <i class="fa fa-facebook-square"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-youtube"></i>
        </div>
        <div class="policy">
            <span>Confidentialitate</span>
            <span>Politica cookies</span>
            <span>Termeni si conditii</span>
        </div>
    </footer>        
</div>
@endsection
