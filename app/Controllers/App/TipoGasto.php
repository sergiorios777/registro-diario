<?php

namespace App\Controllers\App;
use App\Controllers\BaseController;

use App\Models\TipoGastoModel;

class TipoGasto extends BaseController
{
    public function index()
    {
        $tipogasto = new TipoGastoModel();
        $data = [
            'titulo' => "Tipos de gasto",
            'tipogasto' => $tipogasto->find()
        ];
        echo view('application/tipogasto/listado', $data);
    }

    public function show($id)
    {
        $tipogasto = new TipoGastoModel();
        $data = [
            'titulo' => "Detalle del gasto",
            'tipogasto' => $tipogasto->find($id)
        ];

        echo view('application/tipogasto/detalle', $data);
    }

    public function new()
    {
        $data = [
            'titulo' => "Registrar tipo de gasto nuevo",
            'tipogasto' => [
                'IdTipoGasto' => '',
                'TipoGasto' => '',
                'TipoObjeto' => ''
            ]
        ];

        echo view('application/tipogasto/nuevo', $data);
    }

    public function create()
    {
        $tipogasto = new TipoGastoModel();
        if ($this->request->getMethod() === 'post' && $this->validate('tipoGasto')) {
            $data = [
                'TipoGasto' => $this->request->getPost('gasto'),
                'TipoObjeto' => $this->request->getPost('objeto')
            ];
            $tipogasto->insert($data);
        } else {
            session()->setFlashData(['validation' => $this->validator]);
            return redirect()->back()->withInput();
        }
        
        return redirect()->to(base_url() . '/aplicacion/tipogasto')->with('mensaje', '¡Registro creado con éxito!');
    }

    public function edit($id)
    {
        $tipogasto = new TipoGastoModel();
        $data = [
            'titulo' => "Editar tipo de gasto",
            'tipogasto' => $tipogasto->find($id)
        ];

        echo view('application/tipogasto/editar', $data);
    }

    public function update($id)
    {
        $tipogasto = new TipoGastoModel();
        if ($this->request->getMethod() === 'post' && $this->validate('tipoGasto')) {
            $data = [
                'TipoGasto' => $this->request->getPost('gasto'),
                'TipoObjeto' => $this->request->getPost('objeto')
            ];
            $tipogasto->update($id, $data);
        } else {
            session()->setFlashData(['validation' => $this->validator]);
            return redirect()->back()->withInput();
        }
        
        return redirect()->to(base_url() . '/aplicacion/tipogasto/edit/' . $id)->with('mensaje', '¡Registro actualizado con éxito!');
    }

    public function delete($id)
    {
        $tipogasto = new TipoGastoModel();
        $tipogasto->delete($id);
        return redirect()->to(base_url() . '/aplicacion/tipogasto')->with('mensaje', '¡Registro eliminado!');
    }
}