<?php

namespace App\Controllers;

use App\Models\IngresosModel;
use App\Models\TipoComprobanteModel;

class Ingresos extends BaseController
{
    public function index()
    {
        $ingresos = new IngresosModel();
        $data = [
            'titulo' => "Ingresos registrados",
            'ingresos' => $ingresos->asObject()->find()
        ];
        echo view('application/ingresos/listado', $data);
    }

    public function show($id)
    {
        $ingresos = new IngresosModel();
        $tipocomprobante = new TipoComprobanteModel();
        
        $registro = $ingresos->asObject()->find($id);
        $tco = $tipocomprobante->asObject()->find($registro->IdTipoComprobante);

        $comprobante = (isset($tco->TipoComprobante)) ? $tco->TipoComprobante : '[No seleccionado]';
        
        $data = [
            'titulo' => "Detalle del ingreso",
            'ingresos' => $registro,
            'comprobante' => $comprobante
        ];
        echo view('application/ingresos/detalle', $data);
    }

    public function new()
    {
        $tipocomprobante = new TipoComprobanteModel();
        $ingresos = [
            'IdTipoComprobante' => '',
            'NumeroComprobante' => '',
            'Fecha'             => '',
            'Notas'             => '',
            'AplicaIGV'         => '',
            'Monto'             => '',
            'IGV'               => '',
            'MontoTotal'        => '',
        ];
        $data = [
            'titulo'            => "Registrar nuevo ingreso",
            'tipocomprobante'   => $tipocomprobante->asObject()->find(),
            'ingresos'          => $ingresos,
        ];
        echo view('application/ingresos/nuevo', $data);
    }

    public function create()
    {
        $ingresos = new IngresosModel();

        if ($this->validate('ingresosRules'))
        {
            $data = [
                'IdTipoComprobante' => $this->request->getPost('tipo'),
                'NumeroComprobante' => $this->request->getPost('comprobante'),
                'Fecha'             => $this->request->getPost('fecha'),
                'Notas'             => $this->request->getPost('notas'),
                'AplicaIGV'         => $this->request->getPost('aplicaigv'),
                'Monto'             => $this->request->getPost('monto'),
                'IGV'               => $this->request->getPost('igv'),
                'MontoTotal'        => $this->request->getPost('montototal'),
            ];
            $ingresos->insert($data);
        }
        else 
        {
            session()->setFlashData(['validation' => $this->validator]);
            return redirect()->back()->withInput();
        }
        
        return redirect()->to('/aplicacion/ingresos')->with('mensaje', '¡Registro creado con éxito!');
    }

    public function edit($id)
    {
        $ingresos = new IngresosModel();
        $tipocomprobante = new TipoComprobanteModel();

        $registro = $ingresos->asObject()->find($id);

        $data = [
            'titulo' => "Editar ingreso registrado",
            'ingresos' => $registro,
            'idcomprobante' => (isset($registro->IdTipoComprobante)) ? $registro->IdTipoComprobante : 0,
            'tipocomprobante' => $tipocomprobante->asObject()->find()
        ];

        echo view('application/ingresos/editar', $data);
    }

    public function update($id)
    {
        $ingresos = new IngresosModel();

        if ($this->validate('ingresosRules'))
        {
            $data = [
                'IdTipoComprobante' => $this->request->getPost('tipo'),
                'NumeroComprobante' => $this->request->getPost('comprobante'),
                'Fecha'             => $this->request->getPost('fecha'),
                'Notas'             => $this->request->getPost('notas'),
                'AplicaIGV'         => $this->request->getPost('aplicaigv'),
                'Monto'             => $this->request->getPost('monto'),
                'IGV'               => $this->request->getPost('igv'),
                'MontoTotal'        => $this->request->getPost('montototal')
            ];
            $ingresos->update($id, $data);
        }
        else
        {
            session()->setFlashData(['validation' => $this->validator]);
            return redirect()->back()->withInput();
        }

        
        return redirect()->to(base_url() . '/aplicacion/ingresos/edit/' . $id)->with('mensaje', '¡Registro actualizado con éxito!');
    }

    public function delete($id)
    {
        $ingresos = new IngresosModel();
        $ingresos->delete($id); 
        return redirect()->to(base_url() . '/aplicacion/ingresos')->with('mensaje', '¡Registro eliminado!');
    }
}