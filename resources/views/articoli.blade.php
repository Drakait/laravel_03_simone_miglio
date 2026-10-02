<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog - Articoli</title>
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
            <div class="col-12 text-center mb-4">
                <h1 class="text-primary display-5 fw-bold">Tutti gli articoli</h1>
            </div>
        </div>
        
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center mb-4">
                <div class="card bg-dark text-white border-secondary" style="width: 18rem;">
                    <img src="https://picsum.photos/300/200?random={{ $article['id'] }}"
                    class="card-img-top" alt="{{ $article['titolo'] }}">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">{{ $article['categoria'] }}</span>
                        <h5 class="card-title text-primary">{{ $article['titolo'] }}</h5>
                        <p class="card-text">{{ $article['sommario'] }}</p>
                        <small class="text-secondary d-block mb-3">{{ $article['autore'] }} · {{ $article['data'] }}</small>
                        <a href="{{ route('dettaglio', ['id' => $article['id']]) }}" class="btn btn-primary">Leggi di più</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>
</body>

</html>