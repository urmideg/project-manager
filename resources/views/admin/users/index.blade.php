@extends('admin.layouts.app')

@section('content')

  <div class="container">
    <div class="card">

        <h2 class="card-header float-left">
          Список пользователей
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
