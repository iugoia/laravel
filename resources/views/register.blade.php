@extends('layout')

@section('title')
    Регистрация
@endsection


@section('content')
    <div class="container mt-5">
        <form action="{{route('registration')}}" method="post">
            @extends('messages')
            <div class="form-outline mb-4">
                <label class="form-label" for="form2Example1">Имя</label>
                <input type="text" id="form2Example1" name="name" class="form-control" />
            </div>

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

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Регистрация</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="{{route('login')}}">Авторизироваться</a></p>
            </div>
        </form>
    </div>
@endsection
