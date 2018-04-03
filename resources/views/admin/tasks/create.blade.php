@extends('admin.layouts.app')

@section('content')

  <div class="container">
    <div class="card">

      <h2 class="card-header">Добавление задачи</h2>

      <div class="card-body">
        {{-- форма для создания задачи --}}
        <form class="form-horizontal" action="{{route('admin.task.store')}}" method="post">
          {{ csrf_field() }}

          {{-- Подключение формы --}}
          @include('admin.tasks.partials.form')
        </form>

      </div>
    </div>
  </div>

@endsection
