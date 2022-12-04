<!doctype html>
<html lang="en">


<head>
    <title>Sigalev</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <div class="d-lg-inline-flex align-items-center">
            <div class="d-lg-inline-flex align-items-center">
                <a class="navbar-brand w-25 container-sm" href="/">
                    <img src="{{URL::asset('frobandex.png')}}" class="img-fluid " style="width: 100px;" alt="" >
                </a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">    
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="/" aria-current="page">Главная <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">Контакты</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Услуги</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="/">Заказать сайт</a>
                                <a class="dropdown-item" href="/">Сделать SEO</a>
                                <a class="dropdown-item" href="/article">Новости</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <a type="button" class="btn btn-primary" href="/">Сделать сайт</a>
        </div>
    </nav>
</header>
<main>
    <div>
        @yield('jumbo')
    </div>
    <div class="container-lg">
        @yield('content')
    </div>
</main>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <!-- Hover added -->
        <ul>
            <li>Сигалев Георгий Николаевич</li>
            <li>211-323</li>
        </ul>
    </div>
</footer>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
</body>

</html>