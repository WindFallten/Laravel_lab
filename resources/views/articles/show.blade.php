@extends ('layouts.layout')
@section ('content')
<div class="card mb-3 mt-3">
    <div class="card-body">
        <h4 class="card-title text-primary">Статья: {{$info -> name}}</h4>
        <h5 class="card-text">Заголовок №{{$info -> id}}</h5>
        <p class="card-text">Дата: {{$info -> date}}</p>
    </div>
    <ul class="list-group list-group-flush">    
        <li class="list-group-item">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary">Короткое описание</h4>
                    <p class="card-text">{{$info -> shortdesc}}</p>
                </div>
            </div>
        </li>
        <li class="list-group-item">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary">Описание</h4>
                    <p class="card-text">{{$info -> desc}}</p>
                </div>
            </div>
        </li>
    </ul>
    <a name="edit" id="" class="btn btn-primary" href="/article/{{$info -> id}}/edit" role="button">Изменить</a>
</div>

<div class="card mb-3 mt-3">
    <div class="card-body">
        <h4 class="card-title text-primary">Комментарии статьи {{$info -> name}}</h4>
    </div>
    @foreach ($comment as $c)
    <ul class="list-group list-group-flush">    
        <li class="list-group-item">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary">Короткое описание</h4>
                    <p class="card-text">{{$c -> title}}</p>
                    <h5 class="card-title text-secondary">Описание</h5>
                    <p class="card-text">{{$c -> comm}}</p>
                    <a name="edit" id="" class="btn btn-primary" href="/comment/edit/{{$c -> id}}" role="button">Изменить</a>
                    <a name="delete" id="" class="btn btn-danger" href="/comment/{{$c -> id}}/delete" role="button">Удалить</a>
                </div>
            </div>
        </li>
    </ul>
    @endforeach
</div>

<form action="/comment" method="post" class="m-5">
    @csrf
    <input type="hidden" value="{{$info -> id}}" name="id">
    <p class="fw-bold text-start fs-2">Комментировать</p>
    <div class="mb-3">
        <label for="" class="form-label">Создать комментарий</label>
        <input type="text"
            class="form-control" name="title" id="" aria-describedby="helpId" placeholder="Введите текст">
        <small id="helpId" class="form-text text-muted">Заголовок</small>
        <input type="text"
            class="form-control" name="comm" id="" aria-describedby="helpId" placeholder="Введите текст">
        <small id="helpId" class="form-text text-muted">Комментарий</small>
    </div>
    <button type="submit" class="btn btn-primary">Ответить</button>
</form>
@endsection