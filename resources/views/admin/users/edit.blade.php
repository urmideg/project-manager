@extends('admin.layouts.app')

@section('content')

  <div class="container">
    <div class="card">

      <h2 class="card-header">Редактирование пользователя</h2>

      <div class="card-body">
        {{-- форма для редактирования пользователя --}}
        <form class="form-horizontal" action="{{route('admin.user.update', $user)}}" method="post">
          {{ method_field('put')}}
          {{ csrf_field() }}

          {{-- Подключение формы --}}
          @include('admin.users.partials.form')
        </form>

      </div>
    </div>
  </div>

@endsection
