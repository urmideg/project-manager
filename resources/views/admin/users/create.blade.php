@extends('admin.layouts.app')

@section('content')

  <div class="container">
    <div class="card">

      <h2 class="card-header">Создание пользователя</h2>

      <div class="card-body">
        {{-- форма для создания пользователя --}}
        <form class="form-horizontal" action="{{route('admin.user.store')}}" method="post">
          {{ csrf_field() }}

          {{-- Подключение формы --}}
          @include('admin.users.partials.form')
        </form>

      </div>
    </div>
  </div>

@endsection
