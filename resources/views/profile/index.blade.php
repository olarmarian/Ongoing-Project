@extends('layouts.app')

@section('content')
<div class="home-div" style="">
    <div class="wrapper">
        <a href="/locals" class="user">
            <div >
                <h3>Sunt client</h3>
                <h1 class="pl-5 text-center">Caut un local pentru mine si prietenii mei</h1>
                <p class="pt-5 text-center">Rezerva in doar 4 pasi o masa la localul tau preferat</p>
            </div>
        </a>
        <a href="/profile/local/{{$user->id}}" class="entrepreneur">
            <div>
                <h3>Sunt antreprenor</h3>
                <h1 class="text-center">Vreau sa imi promovez localul</h1>
                <p class="pt-5 text-center">Gestioneaza-ti localul si tine evidenta locurilor si a rezervarilor facute</p>
            </div>
        </a>
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
