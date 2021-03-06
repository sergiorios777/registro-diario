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
    public $ingresosRules = [
        'tipo'        => 'required|numeric',
        'comprobante' => 'required|max_length[25]',
        'fecha'       => 'required|valid_date',
        'notas'       => 'max_length[255]',
        'monto'       => 'required|decimal',
        'igv'         => 'decimal',
        'montototal'  => 'required|decimal',
    ];
    
    public $ingresosRules_errors = [
        'tipo' => [
            'required' => 'Debe seleccionar un comprobante.',
            'numeric'  => 'Debe seleccionar un comprobante de la lista.',
        ],
        'comprobante' => [
            'required'       => 'Debe indicar el n&uacute;mero de comprobante.',
            'max_length[25]' => 'El comrpobante debe tener un m&aacute;ximo de 25 caracteres.',
        ],
        'fecha' => [
            'required'       => 'Debe ingresar una fecha.',
            'valid_date'     => 'Indique o seleccione una fecha v&aacute;lida.',
        ],
        'notas' => [
            'max_length[255]' => 'Las notas deben tener un m&aacute;ximo 255 caracteres.',
        ],
        'monto' => [
            'required'        => 'Debe indicar un monto.',
            'decimal'         => 'El monto debe ser un valor num&eacute;rico.'
        ],
        'igv' => [
            'decimal'         => 'El IGV debe ser un valor num&eacute;rico.'
        ],
        'montototal' => [
            'required'        => 'Debe indicar un monto total.',
            'decimal'         => 'El monto total debe ser un valor num&eacute;rico.'
        ]
    ];

    public $gastosRules = [
        'tipo' => 'required|numeric',
        'comprobante' => 'required|max_length[25]',
        'fecha' => 'required|valid_date',
        'notas' => 'max_length[255]',
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
            'required' => 'Debe indicar el n??mero de comprobante.',
            'max_length[25]' => 'El comrpobante debe tener un m??ximo de 25 caracteres.',
        ],
        'fecha' => [
            'required' => 'Debe ingresar una fecha.',
            'valid_date' => 'Indique o seleccione una fecha v??lida.',
        ],
        'notas' => [
            'max_length[255]' => 'Las notas deben tener un m??ximo 255 caracteres.',
        ],
        'monto' => [
            'required' => 'Debe indicar un monto.',
            'decimal' => 'El monto debe ser un valor num??rico.'
        ],
        'igv' => [
            'decimal' => 'El IGV debe ser un valor num??rico.'
        ],
        'montototal' => [
            'required' => 'Debe indicar un monto total.',
            'decimal' => 'El monto total debe ser un valor num??rico.'
        ]
    ];

    public $tipoGasto = [
        'gasto' => 'required|max_length[100]',
        'objeto' => 'required|max_length[10]|alpha',
    ];

    public $tipoGasto_errors = [
        'gasto' => [
            'required' => 'Debe ingresar un tipo de gasto.',
            'max_length[100]' => 'El tipo de gasto es de m??ximo 100 caracteres.',
        ],
        'objeto' => [
            'required' => 'Debe ingresar un tipo de objeto (Bienes o Servicios).',
            'max_length[100]' => 'El tipo de objeto es de m??ximo 10 caracteres.',
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
            'min_length[3]' => 'El nombre de usuario debe ser 3 caracteres como m??nimo.',
            'max_length[20]' => 'El nombre de usuario debe ser 20 caracteres como m??ximo.',
            'is_unique[tblusuario.Usuario]' => 'El nombre de usuario ya existe, pruebe con otro.'
        ],
        'correo'      =>  [
            'required'  =>  'Debe ingresar un correo v??lido.',
            'min_length[5]' => 'Todo el correo debe ser como m??nimo de 5 caracteres.',
            'max_length[100]'   => 'Todo el correo debe ser como m??nimo de 100 caracteres.', 
            'is_unique[tblusuario.Correo]'  => 'El correo ya est?? registrado, pruebe a iniciar sesi??n'
        ],
        'contrasena'  =>  [
            'required'  =>  'Debe ingresar una contrase??a.', 
            'min_length[5]' => 'La contrase??a debe ser como m??nimo de 5 caracteres', 
            'max_length[15]'    => 'La contrase??a debe ser como m??ximo de 15 caracteres',
        ],
    ];
}
