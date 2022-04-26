<?php

namespace App\Controllers\App;
use App\Controllers\BaseController;

use App\Models\TipoComprobanteModel;

class TipoComprobante extends BaseController
{
    public function index()
    {
        $tipocomprobante = new TipoComprobanteModel();
        $data = [
            'titulo' => "Tipo de comprobantes",
            'tipocomprobante' => $tipocomprobante->find()
        ];

        echo view('application/tipocomprobante/listado', $data);
    }

    public function show($id)
    {
        $tipocomprobante = new TipoComprobanteModel();
        $data = [
            'titulo' => "Detalle del comprobante",
            'tipocomprobante' => $tipocomprobante->find($id)
        ];

        echo view('application/tipocomprobante/detalle', $data);
    }

    public function new()
    {
        $data = [
            'titulo' => "Registrar nuevo gasto",
            'tipocomprobante' => [
                'IdTipoComprobante' => '',
                'TipoComprobante' => '',
                'CodigoComprobante' => ''
            ]
        ];

        echo view('application/tipocomprobante/nuevo', $data);
    }

    public function create()
    {
        $tipocomprobante = new TipoComprobanteModel();
        $data = [
            'TipoComprobante' => $this->request->getPost('tipo'),
            'CodigoComprobante' => $this->request->getPost('codigo')
        ];
        $tipocomprobante->insert($data);
        return redirect()->to(basse_url() . '/aplicacion/tipocomprobante')->with('mensaje', '¡Registro creado con éxito!');
    }

    public function edit($id)
    {
        $tipocomprobante = new TipoComprobanteModel();
        $data = [
            'titulo' => "Editar comprobante",
            'tipocomprobante' => $tipocomprobante->find($id)
        ];

        echo view('application/tipocomprobante/editar', $data);
    }

    public function update($id)
    {
        $tipocomprobante = new TipoComprobanteModel();
        $data = [
            'TipoComprobante' => $this->request->getPost('tipo'),
            'CodigoComprobante' => $this->request->getPost('codigo')
        ];
        $tipocomprobante->update($id, $data);
        return redirect()->to(base_url() . '/aplicacion/tipocomprobante/edit/' . $id)->with('mensaje', '¡Registro actualizado con éxito!');
    }

    public function delete($id)
    {
        $tipocomprobante = new TipoComprobanteModel();
        $tipocomprobante->delete($id);
        return redirect()->to(base_url() . '/aplicacion/tipocomprobante')->with('mensaje', '¡Registro eliminado!');
    }
}