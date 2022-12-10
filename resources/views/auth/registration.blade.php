@extends ('layouts.layout')
@section ('content')
<form action="/auth/store" method="post" class="mb-5 mt-5">
    @csrf
    <p class="fw-bold text-start fs-2">Регистрация</p>
    <div class="mb-3">
    <label for="" class="form-label">Имя</label>
    <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="Введите здесь">
    <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
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
@endsection