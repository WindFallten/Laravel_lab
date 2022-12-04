@extends ('layouts.layout')
@section ('content')
<div class="table-responsive-md media-breakpoint-down(lg) mb-3 mt-3">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Date</th>
                <th scope="col">Name</th>
                <th scope="col">Short Descrtiption</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($info as $i)
            <tr class="">
                <td scope="row">{{$i -> date}}</td>
                <td>{{$i -> name}}</td>
                <td>{{$i -> shortdesc}}</td>
                <td>{{$i -> desc}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection