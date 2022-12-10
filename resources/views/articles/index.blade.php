@extends ('layouts.layout')
@section ('content')
<div class="table-responsive-md media-breakpoint-down(lg) mb-3 mt-3">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Name</th>
                <th scope="col">Short Descrtiption</th>
                <th scope="col">Description</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($info as $i)
            <tr class="">
                <td scope="row">{{$i -> date}}</td>
                <td><a href="/article/{{ $i-> id }}">{{$i -> name}}</a></td>
                <td>{{$i -> shortdesc}}</td>
                <td>{{$i -> desc}}</td>
                <td>
                    <form method="post" action="/article/{{$i -> id}}">
                        @csrf
                        {{method_field('DELETE')}}
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$info->links()}}
@endsection