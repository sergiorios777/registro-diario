<?php

namespace App\Controllers\Web;
use App\Controllers\BaseController;
use \CodeIgniter\Exceptions\PageNotFoundExceptions;
use App\Models\UsuarioModel;

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
        $usuario = new UsuarioModel();
        $correo = $this->require->getPost('correo');
        $contrasena = $this->require->getPost('contrasena');
        $registro = $usuario->select('IdUsuario, Usuario, Correo, Contrasena, TipoUsuario')->orWhere('Correo', $correo)->orWhere('Usuario', $correo)->first();

        if (!$registro) return redirect()->back()->with('mensaje', 'Usuario y/o contraseña incorrecto');

        if ($usuario->contrasenaVerificar($contrasena, $registro['Contrasena']))
        {
            $session = session();
            unset($registro['Contrasena']);
            $session->set($usuario);
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
                'Correo'     => $this->erquest->getPost('correo'),
                'Contrasena' => $usuario->contrasenaHash($this->request->getPost('contrasena')),
            ]);
            
            return redirect()->to(route_to('usuario.login'))->with('mensaje', 'Usuario creado con éxito');
        }

        session()->setFlashData(['validation' => $this->validator]);
        return redirect()->back()->withInput();
    }
}