<?php

namespace Config;

use CodeIgniter\Validation\CreditCardRules;
use CodeIgniter\Validation\FileRules;
use CodeIgniter\Validation\FormatRules;
use CodeIgniter\Validation\Rules;

class Validation
{
    //--------------------------------------------------------------------
    // Setup
    //--------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    //--------------------------------------------------------------------
    // Rules
    //--------------------------------------------------------------------
    public $gastosRules = [
        'tipo' => 'required|numeric',
        'comprobante' => 'required|max_length[25]',
        'fecha' => 'required|valid_date',
        'notas' => 'max_length[255]',
        'aplicaigv' => 'required',
        'monto' => 'required|decimal',
        'igv' => 'decimal',
        'montototal' => 'required|decimal',
    ];

    public $gastosRules_errors = [
        'tipo' => [
            'required' => 'Debe seleccionar un comprobante.',
            'numeric' => 'Debe seleccionar un comprobante de la lista.',
        ],
        'comprobante' => [
            'required' => 'Debe indicar el número de comprobante.',
            'max_length[25]' => 'El comrpobante debe tener un máximo de 25 caracteres.',
        ],
        'fecha' => [
            'required' => 'Debe ingresar una fecha.',
            'valid_date' => 'Indique o seleccione una fecha válida.',
        ],
        'notas' => [
            'max_length[255]' => 'Las notas deben tener un máximo 255 caracteres.',
        ],
        'aplicaigv' => [
            'required' => 'Debe indicar si aplica o no el IGV.',
        ],
        'monto' => [
            'required' => 'Debe indicar un monto.',
            'decimal' => 'El monto debe ser un valor numérico.'
        ],
        'igv' => [
            'decimal' => 'El IGV debe ser un valor numérico.'
        ],
        'montototal' => [
            'required' => 'Debe indicar un monto total.',
            'decimal' => 'El monto total debe ser un valor numérico.'
        ]
    ];

    public $tipoGasto = [
        'gasto' => 'required|max_length[100]',
        'objeto' => 'required|max_length[10]|alpha',
    ];

    public $tipoGasto_errors = [
        'gasto' => [
            'required' => 'Debe ingresar un tipo de gasto.',
            'max_length[100]' => 'El tipo de gasto es de máximo 100 caracteres.',
        ],
        'objeto' => [
            'required' => 'Debe ingresar un tipo de objeto (Bienes o Servicios).',
            'max_length[100]' => 'El tipo de objeto es de máximo 10 caracteres.',
        ]
    ];

    public $usuarios = [
        'usuario'     =>  'required|min_length[3]|max_length[20]|is_unique[tblusuario.Usuario]',
        'correo'      =>  'required|min_length[5]|max_length[100]|is_unique[tblusuario.Correo]',
        'contrasena'  =>  'required|min_length[5]|max_length[15]',
    ];

    public $usuarios_errors = [
        'usuario'     =>  [
            'required'  => 'Debe ingresar un nombre de usuario.',
            'min_length[3]' => 'El nombre de usuario debe ser 3 caracteres como mínimo.',
            'max_length[20]' => 'El nombre de usuario debe ser 20 caracteres como máximo.',
            'is_unique[tblusuario.Usuario]' => 'El nombre de usuario ya existe, pruebe con otro.'
        ],
        'correo'      =>  [
            'required'  =>  'Debe ingresar un correo válido.',
            'min_length[5]' => 'Todo el correo debe ser como mínimo de 5 caracteres.',
            'max_length[100]'   => 'Todo el correo debe ser como mínimo de 100 caracteres.', 
            'is_unique[tblusuario.Correo]'  => 'El correo ya está registrado, pruebe a iniciar sesión'
        ],
        'contrasena'  =>  [
            'required'  =>  'Debe ingresar una contraseña.', 
            'min_length[5]' => 'La contraseña debe ser como mínimo de 5 caracteres', 
            'max_length[15]'    => 'La contraseña debe ser como máximo de 15 caracteres',
        ],
    ];
}
