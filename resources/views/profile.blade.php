@extends('layouts.app')
@section('title','Авторизация')
@section('content')
<main>
    <div class="profile">
    Здравствуйте,{{ $user->login }}
    </div>
</main>
@endsection