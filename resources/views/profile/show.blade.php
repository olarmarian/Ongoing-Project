@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($published_profiles as $profile)
            <div class="d-flex col-4 pb-4 align-items-center">
                <a href="/profile/local/{{$profile->user_id}}"><img src="{{$profile->profileImage()}}" alt="" style="height:200px;"></a>
                <div class="font-weight-bold ml-4">
                    <p class="d-block">Nume: {{$profile->name}}</p>
                    <p class="d-block">Specific: {{$profile->specific}}</p>
                    <p class="d-block">Locatie: {{$profile->location}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
