@extends('admin.layouts.app')

@section('content')

  <div class="container">
    <div class="card">

        <h2 class="card-header float-left">
          Список пользователей
          <a href="{{route('admin.user.create')}}" class="btn btn-success float-right">
            Создать пользователя
          </a>
        </h2>

        <div class="card-body">
          <table class="table table-responsiv table-striped table-bordered table-sm">
            <thead>
              <th scope="col">#</th>
              <th scope="col">Имя</th>
              <th scope="col">Email</th>
              <th scope="col">Роль пользователя</th>
              <th scope="col" class="text-right">Действия</th>
            </thead>
            <tbody>
              @forelse ($users as $key => $user)
                <tr>
                  <th scope="row">{{++$key}}</th>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->role}}</td>
                  <td class="text-right">
                      <form action="{{route('admin.user.destroy', $user)}}" method="post">
                        {{ method_field('delete') }}
                        {{ csrf_field() }}

                        <a class="btn btn-outline-primary btn-sm" href="{{route('admin.user.edit', $user)}}">Edit</a>

                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                      </form>
                  </td>
                </tr>
              @empty
                <tr>
                  <td colspan="5" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
              @endforelse
            </tbody>
          </table>
          <ul class="pagination pull-right">
            {{$users->links()}}
          </ul>
        </div>
      </div>
  </div>

@endsection
