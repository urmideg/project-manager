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
  <label for="name">Имя</label>
  <input type="text" class="form-control" name="name" id="name" placeholder="Введите имя" value="@if(old('name')){{old('name')}}@else{{$user->name or ""}}@endif" required>
</div>

<div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" name="email" id="email" placeholder="Введите адрес электронной почты" value="@if(old('email')){{old('email')}}@else{{$user->email or ""}}@endif" required>
</div>

<div class="form-group">
  <label for="role">Роль пользователя</label>
  <select class="custom-select" name="role" id="role">
    @if (isset($user->id))
      <option value="senior" @if ($user->role == 'senior') selected="" @endif>Ведущий программист</option>
      <option value="junior" @if ($user->role == 'junior') selected="" @endif>Программист</option>
    @else
      <option value="senior">Ведущий программист</option>
      <option value="junior">Программист</option>
    @endif
  </select>
</div>

<div class="form-group">
  <label for="password">Пароль</label>
  <input type="password" class="form-control" name="password" id="password">
</div>

<div class="form-group">
  <label for="password_confirmation">Подтверждение</label>
  <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
</div>

<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">
<a class="btn btn-outline-danger" href="{{ route('admin.user.index') }}">Отмена</a>
