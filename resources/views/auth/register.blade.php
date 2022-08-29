@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Регистрация пользователя') }}</div>

                <div class="card-body">
{{--                    <form method="POST" action="{{ route('register') }}">--}}
{{--                        @csrf--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>--}}

{{--                                @error('name')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                @error('email')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-3">--}}
{{--                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="col-md-6">--}}
{{--                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row mb-0">--}}
{{--                            <div class="col-md-6 offset-md-4">--}}
{{--                                <button type="submit" class="btn btn-primary">--}}
{{--                                    {{ __('Register') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
                    <form id="registrationForm" action="{{ route('admin.user.store') }}" method="post" class="w-25">
                        @csrf
                        <div class="form-group">
                            <label>введите фамилию:</label>
                            <input type="text" class="form-control" name="surname" placeholder="Фамилия">
                            @error('surname')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>введите имя:</label>
                            <input type="text" class="form-control" name="name" placeholder="Имя">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>введите отчество:</label>
                            <input type="text" class="form-control" name="patronymic" placeholder="Отчество">
                            @error('patronymic')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>введите ИИН:</label>
                            <input type="text" class="form-control" name="itn" placeholder="ИИН">
                            @error('itn')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>введите дату рождения:</label>
                            <input type="date" class="form-control" name="date_of_birth" placeholder="Дата рождения">
                            @error('date_of_birth')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>введите URL картинки:</label>
                            <input type="url" class="form-control" name="images" placeholder="URL фото">
                            @error('images')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>введите email:</label>
                            <input type="email" class="form-control" name="email" placeholder="email">
                            @error('email')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>введите пароль:</label>
                            <input type="password" class="form-control" name="password" placeholder="пароль">
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>повторите пароль:</label>
                            <input type="password" class="form-control" name="password" placeholder="пароль">
                            @error('password')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>


                        <input id="submit" type="submit" class="btn btn-primary" value="Добавить">
                    </form>
                </div>

                <script>
                    const form = document.querySelector('#registrationForm');
                    console.log(form)

                    document.querySelector('#submit').addEventListener('click', async () => {
                        let response = await fetch('testtask/api/api_login', {
                            method: POST,
                            body: new FormData(form)
                        }).then(res => console.log(res)).catch(err => console.log(err))

                        let result = await response.json();

                        console.log(result)
                    })
                </script>
            </div>
        </div>
    </div>
</div>
@endsection
