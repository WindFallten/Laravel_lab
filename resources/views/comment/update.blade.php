@extends ('layouts.layout')
@section ('content')
<form action="/comment/update/{{$comment -> id}}" method="post" class="m-5">
    @csrf
    <input type="hidden" value="" name="id">
    <p class="fw-bold text-start fs-2">Обновление комментария</p>
    <div class="mb-3">
        <label for="" class="form-label">Обновление</label>
        <input type="text" value=""
            class="form-control" name="title" id="" aria-describedby="helpId" placeholder="Введите текст">
        <small id="helpId" class="form-text text-muted">Заголовок</small>
        <input type="text" value=""
            class="form-control" name="comm" id="" aria-describedby="helpId" placeholder="Введите текст">
        <small id="helpId" class="form-text text-muted">Комментарий</small>
    </div>
    <button type="submit" class="btn btn-primary">Обновить</button>
</form>
@endsection