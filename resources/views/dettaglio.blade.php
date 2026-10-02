<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - {{ $article['titolo'] }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/109fb709db.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">
    
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}"><i class="fa-solid fa-tent"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('articoli') }}">Articoli</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div class="container-fluid p-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="card bg-dark text-white border-secondary">
                    <img src="https://picsum.photos/800/400?random={{ $article['id'] }}"
                    class="card-img-top" style="height: 300px; object-fit: cover;" alt="{{ $article['titolo'] }}">
                    <div class="card-body text-center">
                        <span class="badge bg-primary mb-2">{{ $article['categoria'] }}</span>
                        <h1 class="text-primary display-6 fw-bold">{{ $article['titolo'] }}</h1>
                        <p class="text-secondary">di {{ $article['autore'] }} · {{ $article['data'] }}</p>
                        <p class="card-text mt-3">{{ $article['testo'] }}</p>
                        <a href="{{ route('articoli') }}" class="btn btn-primary mt-2">Torna agli articoli</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>
</body>

</html>