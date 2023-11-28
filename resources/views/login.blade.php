@extends('layout')

@section('title')
    Авторизация
@endsection

@section('content')
    <div class="container mt-5">
        <form action="{{route('auth')}}" method="post">
            @extends('messages')

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Почта</label>
                <input type="email" id="form2Example1" name="email" class="form-control" />
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example2">Пароль</label>
                <input type="password" id="form2Example2" name="password" class="form-control" />
            </div>

            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31">Запомнить меня</label>
                    </div>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Войти</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="{{route('register')}}">Регистрация</a></p>
            </div>
        </form>
    </div>
@endsection
