@extends('layouts.app')
@section('title','Авторизация')
@section('content')
<main>
    <div class="auth">
        <h1>Авторизация</h1>
        <form action="{{ route('auth') }}" method="post">
            @csrf
            <div class="strokeLogin">
                <label id="loginLabel" for="login">Логин</label>
                <input id="login" type="text" name="login">
            </div>
            <div class="strokeLogin">
                <label id="passwordLabel" for="password">Пароль</label>
                <input id="password" type="text" name="password">
            </div>
            <button id="buttonLogin" type="submit">Войти</button>
        </form>
    </div>
</main>
<script src="{{ url('/js/app.js') }}"></script>
@endsection