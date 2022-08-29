@extends('admin.layouts.main')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ $user->name }}</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->

                <div class="row"
                <div>
                    <div class="card col-12">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0 " style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">

                                <tbody>

                                <tr>
                                    <th>ID</th>
                                    <th>Фамилия</th>
                                    <th>Имя</th>
                                    <th>Отчество</th>
                                    <th>Статус</th>
                                    <th>ИИН</th>
                                    <th>Дата рождения</th>
                                    <th>URL Фото</th>
                                    <th>Email</th>
                                    <th colspan="2" class="text-center table-warning">Действие</th>
                                </tr>

                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->surname }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->patronymic }}</td>
                                    <td>{{ $user->status }}</td>
                                    <td>{{ $user->itn }}</td>
                                    <td>{{ $user->date_of_birth }}</td>
                                    <td>{{ $user->images}}</td>
                                    <td>{{ $user->email }}</td>
                                    <td><a href="{{ route('admin.user.edit', $user->id) }}" class="text-success">
                                            <i class="fas fa-pencil-alt"></i></a></td>
                                    <td>
                                        <form action="{{route('admin.user.delete', $user->id)}}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="border-0 bg-transparent">
                                                <i class="fas fa-trash text-danger"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
            <!-- /.row -->

    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection