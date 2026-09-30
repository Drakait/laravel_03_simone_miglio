<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    private function articoli()
    {
        return [
            ['articolo' => 'La cosa', 'tipologia' => 'dei fantastici 4', 'dettaglio' => 'il forzuto'],
            ['articolo' => 'il coso', 'tipologia' => 'un oggetto', 'dettaglio' => 'qualcosa di utile'],
            ['articolo' => 'l\'inutile', 'tipologia' => 'Politica italiana', 'dettaglio' => 'inutile da decenni'],
            ['articolo' => 'quello', 'tipologia' => 'aggettivo dimostrativo', 'dettaglio' => 'indica qualcosa lontano sia da chi parla che da chi ascolta'],
            ['articolo' => 'questo', 'tipologia' => 'aggettivo dimostrativo', 'dettaglio' => 'indica qualcosa vicino a chi parla'],
            ['articolo' => 'codesto', 'tipologia' => 'aggettivo dimostrativo', 'dettaglio' => 'indica qualcosa vicino a chi ascolta'],
        ];
    }

    public function index()
    {
        return view('articoli', ['articoli' => $this->articoli()]);
    }

    public function show($id)
    {
        $articoli = $this->articoli();

        return view('dettaglio', ['articolo' => $articoli[$id], 'id' => $id]);
    }
}