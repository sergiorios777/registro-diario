<?php

namespace App\Controllers;

use App\Models\GastosModel;
use App\Models\TipoComprobanteModel;

class Gastos extends BaseController
{
    public function index()
    {
        $gastos = new GastosModel();
        $data = [
            'titulo' => "Gastos registrados",
            'gastos' => $gastos->asObject()->find()
        ];
        echo view('application/gastos/listado', $data);
    }

    public function show($id)
    {
        $gastos = new GastosModel();
        $tipocomprobante = new TipoComprobanteModel();

        $registro = $gastos->asObject()->find($id);
        $tco = $tipocomprobante->asObject()->find($registro->IdTipoComprobante);

        $data = [
            'titulo' => "Detalle del gasto",
            'gastos' => $registro,
            'comprobante' => $tco->TipoComprobante
        ];

        echo view('application/gastos/detalle', $data);
    }

    public function new()
    {
        $tipocomprobante = new TipoComprobanteModel();
        $gastos = [
            'IdTipoComprobante' => '',
            'NumeroComprobante' => '',
            'Fecha' => '',
            'Notas' => '',
            'AplicaIGV' => '',
            'Monto' => '',
            'IGV' => '',
            'MontoTotal' => '',
        ];
        $data = [
            'titulo' => "Registrar nuevo gasto",
            'tipocomprobante' => $tipocomprobante->asObject()->find(),
            'gastos' => $gastos,
        ];

        echo view('application/gastos/nuevo', $data);
    }

    public function create()
    {
        $gastos = new GastosModel();

        if ($this->request->getMethod() === 'post' && $this->validate('gastosRules')) {
            $data = [
                'IdTipoComprobante' => $this->request->getPost('tipo'),
                'NumeroComprobante' => $this->request->getPost('comprobante'),
                'Fecha' => $this->request->getPost('fecha'),
                'Notas' => $this->request->getPost('notas'),
                'AplicaIGV' => $this->request->getPost('aplicaigv'),
                'Monto' => $this->request->getPost('monto'),
                'IGV' => $this->request->getPost('igv'),
                'MontoTotal' => $this->request->getPost('montototal'),
            ];
            $gastos->insert($data);
        } else {
            session()->setFlashData(['validation' => $this->validator]);
            return redirect()->back()->withInput();
        }

        return redirect()->to('/aplicacion/gastos')->with('mensaje', '¡Registro creado con éxito!');
    }

    public function edit($id)
    {
        $gastos = new GastosModel();
        $tipocomprobante = new TipoComprobanteModel();

        $registro = $gastos->asObject()->find($id);

        $data = [
            'titulo' => "Editar gasto registrado",
            'gastos' => $registro,
            'idcomprobante' => $registro->IdTipoComprobante,
            'tipocomprobante' => $tipocomprobante->asObject()->find()
        ];

        echo view('application/gastos/editar', $data);
    }

    public function update($id)
    {
        $gastos = new GastosModel();

        if ($this->request->getMethod() === 'post' && $this->validate('gastosRules')) {
            $data = [
                'IdTipoComprobante' => $this->request->getPost('tipo'),
                'NumeroComprobante' => $this->request->getPost('comprobante'),
                'Fecha' => $this->request->getPost('fecha'),
                'Notas' => $this->request->getPost('notas'),
                'AplicaIGV' => $this->request->getPost('aplicaigv'),
                'Monto' => $this->request->getPost('monto'),
                'IGV' => $this->request->getPost('igv'),
                'MontoTotal' => $this->request->getPost('montototal')
            ];
            $gastos->update($id, $data);
        } else {
            session()->setFlashData(['validation' => $this->validator]);
            return redirect()->back()->withInput();
        }
        
        return redirect()->to('/aplicacion/gastos/edit/' . $id)->with('mensaje', '¡Registro actualizado con éxito!');
    }

    public function delete($id)
    {
        $gastos = new GastosModel();
        $gastos->delete($id);
        return redirect()->to('/aplicacion/gastos')->with('mensaje', '¡Registro eliminado!');
    }
    
}