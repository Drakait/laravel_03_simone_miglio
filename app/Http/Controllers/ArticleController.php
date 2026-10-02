<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $arrayArticles = [
            ['id' => 1, 'titolo' => 'Cos\'è Laravel', 'categoria' => 'Backend', 'autore' => 'Simone Miglio', 'data' => '12/01/2026', 'sommario' => 'Un framework PHP ordinato e veloce.', 'testo' => 'Laravel è un framework PHP basato sul pattern MVC. Offre routing semplice, un motore di template (Blade) e tanti strumenti pronti all\'uso.'],
            ['id' => 2, 'titolo' => 'Rotte e controller', 'categoria' => 'Backend', 'autore' => 'Simone Miglio', 'data' => '19/01/2026', 'sommario' => 'Le rotte indirizzano, i controller gestiscono la logica.', 'testo' => 'Le rotte decidono quale URL porta a quale metodo. Il controller prepara i dati e sceglie la vista da mostrare.'],
            ['id' => 3, 'titolo' => 'Blade e le viste', 'categoria' => 'Frontend', 'autore' => 'Simone Miglio', 'data' => '26/01/2026', 'sommario' => 'Cicli e variabili nelle pagine.', 'testo' => 'Blade permette di scrivere HTML con direttive come foreach e if e di stampare variabili con le doppie graffe.'],
            ['id' => 4, 'titolo' => 'Griglia Bootstrap', 'categoria' => 'Frontend', 'autore' => 'Simone Miglio', 'data' => '02/02/2026', 'sommario' => 'Righe, colonne e breakpoint.', 'testo' => 'La griglia di Bootstrap divide la pagina in 12 colonne. Con classi come col-12 e col-md-6 decidi quante colonne occupa un elemento.'],
        ];

        return view('articoli', ['articles' => $arrayArticles]);
    }

    public function dettaglio($id)
    {
        $arrayArticles = [
            ['id' => 1, 'titolo' => 'Cos\'è Laravel', 'categoria' => 'Backend', 'autore' => 'Simone Miglio', 'data' => '12/01/2026', 'sommario' => 'Un framework PHP ordinato e veloce.', 'testo' => 'Laravel è un framework PHP basato sul pattern MVC. Offre routing semplice, un motore di template (Blade) e tanti strumenti pronti all\'uso.'],
            ['id' => 2, 'titolo' => 'Rotte e controller', 'categoria' => 'Backend', 'autore' => 'Simone Miglio', 'data' => '19/01/2026', 'sommario' => 'Le rotte indirizzano, i controller gestiscono la logica.', 'testo' => 'Le rotte decidono quale URL porta a quale metodo. Il controller prepara i dati e sceglie la vista da mostrare.'],
            ['id' => 3, 'titolo' => 'Blade e le viste', 'categoria' => 'Frontend', 'autore' => 'Simone Miglio', 'data' => '26/01/2026', 'sommario' => 'Cicli e variabili nelle pagine.', 'testo' => 'Blade permette di scrivere HTML con direttive come foreach e if e di stampare variabili con le doppie graffe.'],
            ['id' => 4, 'titolo' => 'Griglia Bootstrap', 'categoria' => 'Frontend', 'autore' => 'Simone Miglio', 'data' => '02/02/2026', 'sommario' => 'Righe, colonne e breakpoint.', 'testo' => 'La griglia di Bootstrap divide la pagina in 12 colonne. Con classi come col-12 e col-md-6 decidi quante colonne occupa un elemento.'],
        ];

        foreach ($arrayArticles as $article) {
            if ($id == $article['id']) {
                return view('dettaglio', ['article' => $article]);
            }
        }

    }
}