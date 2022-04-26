<?php

namespace App\Controllers;

class Application extends BaseController
{
    public function index()
    {
        $data = [
            'titulo' => "Inicio"
        ];
        echo view('application/inicio-app', $data);
    }
}
