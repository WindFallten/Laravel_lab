@extends ('layouts.layout')
@section ('content')
<form action="/article" method="post" class="mb-5 mt-5">
    @csrf
    <p class="fw-bold text-start fs-2">Создание Новости</p>
    <div class="mb-3">
    <label for="" class="form-label">Date</label>
    <input type="date"
        class="form-control" name="date" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="" aria-describedby="emailHelpId" placeholder="Some text">
    <small id="emailHelpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Short Description</label>
    <input type="text"
        class="form-control" name="shortdesc" id="" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input type="text"
        class="form-control" name="desc" id="" aria-describedby="helpId" placeholder="">
    <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection