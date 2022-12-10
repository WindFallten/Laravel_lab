@extends ('layouts.layout')
@section ('jumbo')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-lg py-5">
      <h1 class="display-5 fw-bold"><span style="color:#4DDA75; backdrop-filter: blur(2px);">Frobænd</span> Студия веб-разработки</h1>
      <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
      <button class="btn btn-primary btn-lg" type="button">Сделать сайт</button>
    </div>
  </div>
@endsection
@section ('content')
<form action="/auth/store" method="post" class="mb-5 mt-5">
    @csrf
    <p class="fw-bold text-start fs-2">Войти</p>
    <div class="mb-3">
    <label for="" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="" aria-describedby="emailHelpId" placeholder="abc@mail.com">
    <small id="emailHelpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Пароль</label>
    <input type="text"
        class="form-control" name="password" id="" aria-describedby="helpId" placeholder="Введите здесь">
    <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <button type="submit" class="btn btn-primary">Отправить</button>
</form>
<p class="fw-bold text-start mt-3">Ещё нет аккаунта? Зарегистрируйтесь!</p>
<a name="" id="" class="btn btn-primary mb-3" href="/auth/registration" role="button">Регистрация</a>
@endsection