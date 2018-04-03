@extends('admin.layouts.app')

@section('content')

  <div class="container">
    <div class="card">

      <h2 class="card-header">Редактирование задачи</h2>

      <div class="card-body">
        {{-- форма для редактирования задачи --}}
        <form class="form-horizontal" action="{{route('admin.task.update', $task)}}" method="post">
          {{ method_field('put')}}
          {{ csrf_field() }}

          {{-- Подключение формы --}}
          @include('admin.tasks.partials.form')
        </form>

      </div>
    </div>
  </div>

@endsection
