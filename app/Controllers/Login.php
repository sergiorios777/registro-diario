<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        echo view('login/templates/encabezado');
        echo view('login/ingresar');
        echo view('login/templates/pie');
    }

    public function registrar()
    {
        echo view('login/templates/encabezado');
        echo view('login/registrar');
        echo view('login/templates/pie');
    }
}
