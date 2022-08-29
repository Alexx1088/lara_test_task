@extends('layouts.app')

@section('content')
   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Регистрация пользователя') }}</div>

                <div class="card-body">

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

                        <input id="submit" type="submit" class="btn btn-primary mt-3" value="Добавить">
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
