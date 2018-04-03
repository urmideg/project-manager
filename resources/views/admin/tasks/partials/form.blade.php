@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="form-group">
  <label for="name">Название задачи</label>
  <input type="text" class="form-control" name="name" id="name" placeholder="Введите название задачи" value="@if(old('name')){{old('name')}}@else{{$task->name or ""}}@endif" @can ('junior') disabled @endcan required>
</div>

<div class="form-group">
  <label for="description">Описание задачи</label>
  <textarea class="form-control" name="description" id="description" @can ('junior') disabled @endcan required>@if(old('description')){{old('description')}}@else{{$task->description or ""}}@endif</textarea>
</div>

<div class="form-group">
  <label for="status">Статус задачи</label>
  <select class="custom-select" name="status" id="status">
    @if (isset($task->id))
      <option value="Реализация" @if ($task->status == 'Реализация') selected="" @endif>Реализация</option>
      <option value="Завершена" @if ($task->status == 'Завершена') selected="" @endif>Завершена</option>
    @else
      <option value="Реализация">Реализация</option>
      <option value="Завершена">Завершена</option>
    @endif
  </select>
</div>

<div class="form-group">
  <label for="worker">Ответственный исполнитель</label>
  <select class="custom-select" name="worker" id="worker" @can ('junior') disabled @endcan>
      @if (isset($task->id))
          @forelse ($workers as $worker)
              <option value="{{ $worker->name }}" @if ($task->worker == $worker->name) selected="" @endif>{{ $worker->name }}</option>
            @empty
              <option value="{{ $task->worker }}" selected="">{{ $task->worker }}</option>
            @endforelse
      @else
          @forelse ($workers as $worker)
              <option value="{{ $worker->name }}" >{{ $worker->name }}</option>
          @empty
              <option selected="">Необходимо добавить пользователя с ролью программист</option>
          @endforelse
      @endif
  </select>
</div>

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
<a class="btn btn-outline-danger" href="{{ route('admin.task.index') }}">Отмена</a>
