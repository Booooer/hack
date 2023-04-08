@extends('layouts.app')
@section('title','Авторизация')
@section('content')
<main>
    <div class="auth">
        <h1>Авторизация</h1>
        <form action="{{ route('auth') }}" method="post">
            @csrf
            <input type="text" name="login">
            <input type="text" name="password">
            <input type="text" name="repeat_password" id="">
            <button type="submit">Войти</button>
        </form>
    </div>
</main>
@endsection