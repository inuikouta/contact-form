@extends('layouts.app')

@section('content')
<div class="title">
    <h2>Register</h2>
</div>
<form action="/login" method="POST" class="form">
    @csrf
    <div class="form__item">
        <label for="" class="form__label">メールアドレス</label>
        <input type="text" class="form__input" name="email">
        @error('email')
            {{ $message }}
        @enderror
    </div>
    <div class="form__item">
        <label for="" class="form__label">パスワード</label>
        <input type="text" class="form__input" name="password">
        @error('password')
            {{ $message }}
        @enderror
    </div>
    <div class="form__item">
        <input type="submit" class="form__btn">
    </div>
</form>
@endsection