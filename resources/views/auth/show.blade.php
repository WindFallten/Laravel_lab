@extends ('layouts.layout')
@section ('content')
<div class="card mb-3 mt-3">
    <div class="card-body">
        <h4 class="card-title text-primary">Статья: {{$auth -> name}}</h4>
        <h5 class="card-text">Заголовок №{{$auth -> id}}</h5>
        <p class="card-text">Дата: {{$auth -> email}}</p>
    </div>
    <ul class="list-group list-group-flush">    
        <li class="list-group-item">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-primary">Короткое описание</h4>
                    <p class="card-text">{{$auth -> password}}</p>
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
@endsection