@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm">
        <div class="card">
          <h3 class="card-header">В реализации</h3>
          <div class="card-body">
              <ol>
                  @forelse ($works as $task)
                      <li><strong>{{ $task->name }}</strong> - {{ $task->worker}}</li>
                  @empty
                      <li>Задачи отсутствуют</li>
                  @endforelse
              </ol>
        </div>
        </div>
    </div>
    <div class="col-sm">
        <div class="card">
          <h3 class="card-header">Завершенные</h3>
          <div class="card-body">
              <ol>
                  @forelse ($complites as $task)
                      <li><strong>{{ $task->name }}</strong> - {{ $task->worker}}</li>
                  @empty
                      <li>Задачи отсутствуют</li>
                  @endforelse
              </ol>
        </div>
        </div>
    </div>
  </div>
</div>

@endsection
