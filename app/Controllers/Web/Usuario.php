<?php

namespace App\Controllers\Web;
use App\Models\UsuarioModel;
use App\Controllers\BaseController;
use \CodeIgniter\Exceptions\PageNotFoundExceptions;

class Usuario extends BaseController
{
    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to(route_to('usuario.login'));
    }

    public function login()
    {
        echo view('web/usuario/login');
    }

    public function login_post()
    {
        $usuario    = new UsuarioModel();
        $correo     = $this->request->getPost('correo');
        $contrasena = $this->request->getPost('contrasena');
        $registro   = $usuario->select('IdUsuario, Usuario, Correo, Contrasena, TipoUsuario')->orWhere('Correo', $correo)->orWhere('Usuario', $correo)->first();

        if (!$registro) return redirect()->back()->with('mensaje', 'Usuario y/o contraseña incorrecto');

        if ($usuario->contrasenaVerificar($contrasena, $registro['Contrasena']))
        {
            $session = session();
            unset($registro['Contrasena']);
            $session->set($registro);
            return redirect()->to(route_to('app.inicio'))->with('mensaje', 'Bienvenido');
        }

        return redirect()->back()->with('mensaje', 'Usuario y/o contraseña incorrecto');
    }

    public function registrar()
    {
        echo view('web/usuario/registrar');
    }

    public function registrar_post()
    {
        $usuario = new UsuarioModel();
        
        if ($this->validate('usuarios'))
        {
            $usuario->insert([
                'Usuario'    => $this->request->getPost('usuario'),
                'Correo'     => $this->request->getPost('correo'),
                'Contrasena' => $usuario->contrasenaHash($this->request->getPost('contrasena')),
            ]);
            
            return redirect()->to(route_to('usuario.login'))->with('mensaje', 'Usuario creado con éxito');
        }

        session()->setFlashData(['validation' => $this->validator]);
        return redirect()->back()->withInput();
    }
}