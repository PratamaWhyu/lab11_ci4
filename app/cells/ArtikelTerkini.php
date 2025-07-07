<?php

namespace App\Cells;

use App\Models\ArtikelModel;

class ArtikelTerkini
{
    public function index()
    {
        $model = new ArtikelModel();
        $artikel = $model->orderBy('id', 'DESC')->limit(10)->findAll();

        return view('components/artikel_terkini', ['artikel' => $artikel]);
    }
}
