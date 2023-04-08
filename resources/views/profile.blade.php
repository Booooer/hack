@extends('layouts.app')
@section('title','Авторизация')
@section('content')
<main>
    <div class="profile-container">
        <div class="profile">
            @if($user->role == 'admin')
            <div class="panel-add-users">
                <p>Добавление пользователя</p>
                <input type="text" placeholder="введите логин" id="regLogin">
                <input type="text" placeholder="введите пароль" id="regPassword">
                <select name="" id="">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <button type="submit" id="btnReg" onclick="sendData()">Добавить</button>
            </div>
            @endif
        <div>
    </div>
</main>
<script src="{{ url('/js/addUser.js') }}"></script>
@endsection