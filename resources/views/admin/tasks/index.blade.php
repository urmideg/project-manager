@extends('admin.layouts.app')

@section('content')

  <div class="container">
    <div class="card">

        <h2 class="card-header float-left">
          Список задач
          @can ('senior')
            <a href="{{route('admin.task.create')}}" class="btn btn-success float-right">
              Добавить задачу
            </a>
          @endcan
        </h2>

        <div class="card-body">
          <table class="table table-responsiv table-striped table-bordered table-sm">
            <thead>
              <th scope="col">#</th>
              <th scope="col">Название</th>
              <th scope="col">Статус</th>
              <th scope="col">Отвественный</th>
              <th scope="col" class="text-right">Действия</th>
            </thead>
            <tbody>
              @forelse ($tasks as $key => $task)
                <tr>
                  <th scope="row">{{++$key}}</th>
                  <td>{{$task->name}}</td>
                  <td>{{$task->status}}</td>
                  <td>{{$task->worker}}</td>
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
            {{$tasks->links()}}
          </ul>
        </div>
      </div>
  </div>

@endsection
