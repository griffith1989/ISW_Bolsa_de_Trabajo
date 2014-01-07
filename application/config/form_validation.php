<?php 
$config = array (
    'ingresar' => array ( 
        array (
            'field' => 'Usuario',
            'label' => 'Usuario',
            'rules' => 'required|trim|max_length[25]|alpha_numeric|xss_clean'
        ),
        array (
            'field' => 'Contrasenia',
            'label' => 'Contraseña',
            'rules' => 'required|trim|max_length[20]|xss_clean'
        )
    ),
    'administrador/consultas/seleccion_crear/crear_administrador' => array (
        array (
            'field' => 'usuario',
            'label' => 'Usuario',
            'rules' => 'required|trim|max_length[25]|alpha_numeric|xss_clean'
        ),
        array (
            'field' => 'pass',
            'label' => 'Contraseña',
            'rules' => 'required|trim|max_length[20]|xss_clean'
        ),
        array (
            'field' => 'nombre1',
            'label' => 'Primer Nombre',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'nombre2',
            'label' => 'Segundo Nombre',
            'rules' => 'trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido1',
            'label' => 'Primer Apellido',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido2',
            'label' => 'Segundo Apellido',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'rut',
            'label' => 'Rut',
            'rules' => 'required|trim|max_length[12]|xss_clean'
        ),
        array (
            'field' => 'fecha',
            'label' => 'Fecha de Nacimiento',
            'rules' => 'required|trim|max_length[10]|xss_clean'
        ),
        array (
            'field' => 'telefono1',
            'label' => 'Primer Telefono',
            'rules' => 'required|trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'telefono2',
            'label' => 'Segundo Telefono',
            'rules' => 'trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'correo',
            'label' => 'E-Mail',
            'rules' => 'required|trim|max_length[60]|valid_email|xss_clean'
        ),
        array (
            'field' => 'comuna',
            'label' => 'Comuna',
            'rules' => 'required|max_length[25]|alpha|xss_clean'
        ),
        array (
            'field' => 'direccion',
            'label' => 'Direccion',
            'rules' => 'required|xss_clean'
        )
    ),
    'administrador/consultas/seleccion_crear/crear_alumno' => array (
        array (
            'field' => 'usuario',
            'label' => 'Usuario',
            'rules' => 'required|trim|max_length[25]|alpha_numeric|xss_clean'
        ),
        array (
            'field' => 'pass',
            'label' => 'Contraseña',
            'rules' => 'required|trim|max_length[20]|xss_clean'
        ),
        array (
            'field' => 'nombre1',
            'label' => 'Primer Nombre',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'nombre2',
            'label' => 'Segundo Nombre',
            'rules' => 'trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido1',
            'label' => 'Primer Apellido',
            'rules' => 'trim|required|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido2',
            'label' => 'Segundo Apellido',
            'rules' => 'trim|required|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'rut',
            'label' => 'Rut',
            'rules' => 'required|trim|max_length[12]|xss_clean'
        ),
        array (
            'field' => 'fecha',
            'label' => 'Fecha de Nacimiento',
            'rules' => 'required|trim|max_length[10]|xss_clean'
        ),
        array (
            'field' => 'anio_ingreso',
            'label' => 'Año de Ingreso',
            'rules' => 'required|trim|exact_length[4]|numeric|xss_clean'
        ),
        array (
            'field' => 'telefono1',
            'label' => 'Primer Telefono',
            'rules' => 'required|trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'telefono2',
            'label' => 'Segundo Telefono',
            'rules' => 'trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'correo',
            'label' => 'E-Mail',
            'rules' => 'required|trim|max_length[60]|valid_email|xss_clean'
        ),
        array (
            'field' => 'comuna',
            'label' => 'Comuna',
            'rules' => 'required|trim|max_length[25]|alpha|xss_clean'
        ),
        array (
            'field' => 'direccion',
            'label' => 'Direccion',
            'rules' => 'required|xss_clean'
        )
    ),
    'administrador/consultas/seleccion_crear/crear_empleador' => array (
        array (
            'field' => 'usuario',
            'label' => 'Usuario',
            'rules' => 'required|trim|max_length[25]|alpha_numeric|xss_clean'
        ),
        array (
            'field' => 'pass',
            'label' => 'Contraseña',
            'rules' => 'required|trim|max_length[20]|xss_clean'
        ),
        array (
            'field' => 'nombre1',
            'label' => 'Primer Nombre',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'nombre2',
            'label' => 'Segundo Nombre',
            'rules' => 'trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido1',
            'label' => 'Primer Apellido',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido2',
            'label' => 'Segundo Apellido',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'telefono1',
            'label' => 'Primer Telefono',
            'rules' => 'required|trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'telefono2',
            'label' => 'Segundo Telefono',
            'rules' => 'trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'correo',
            'label' => 'E-Mail',
            'rules' => 'required|trim|max_length[60]|valid_email|xss_clean'
        )
    ),
    'administrador/consultas/seleccion_crear/modificar_alumno' => array (
        array (
            'field' => 'usuario',
            'label' => 'Usuario',
            'rules' => 'required|trim|max_length[25]|alpha_numeric|xss_clean'
        ),
        array (
            'field' => 'pass',
            'label' => 'Contraseña',
            'rules' => 'trim|max_length[20]|xss_clean'
        ),
        array (
            'field' => 'nombre1',
            'label' => 'Primer Nombre',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'nombre2',
            'label' => 'Segundo Nombre',
            'rules' => 'trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido1',
            'label' => 'Primer Apellido',
            'rules' => 'trim|required|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido2',
            'label' => 'Segundo Apellido',
            'rules' => 'trim|required|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'rut',
            'label' => 'Rut',
            'rules' => 'required|trim|max_length[12]|xss_clean'
        ),
        array (
            'field' => 'fecha',
            'label' => 'Fecha de Nacimiento',
            'rules' => 'required|trim|max_length[10]|xss_clean'
        ),
        array (
            'field' => 'anio_ingreso',
            'label' => 'Año de Ingreso',
            'rules' => 'required|trim|exact_length[4]|numeric|xss_clean'
        ),
        array (
            'field' => 'telefono1',
            'label' => 'Primer Telefono',
            'rules' => 'required|trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'telefono2',
            'label' => 'Segundo Telefono',
            'rules' => 'trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'correo',
            'label' => 'E-Mail',
            'rules' => 'required|trim|max_length[60]|valid_email|xss_clean'
        ),
        array (
            'field' => 'comuna',
            'label' => 'Comuna',
            'rules' => 'required|trim|max_length[25]|alpha|xss_clean'
        ),
        array (
            'field' => 'direccion',
            'label' => 'Direccion',
            'rules' => 'required|xss_clean'
        )
    ),
    'administrador/consultas/seleccion_crear/modificar_empleador' => array (
        array (
            'field' => 'usuario',
            'label' => 'Usuario',
            'rules' => 'required|trim|max_length[25]|alpha_numeric|xss_clean'
        ),
        array (
            'field' => 'pass',
            'label' => 'Contraseña',
            'rules' => 'trim|max_length[20]|xss_clean'
        ),
        array (
            'field' => 'nombre1',
            'label' => 'Primer Nombre',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'nombre2',
            'label' => 'Segundo Nombre',
            'rules' => 'trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido1',
            'label' => 'Primer Apellido',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido2',
            'label' => 'Segundo Apellido',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'telefono1',
            'label' => 'Primer Telefono',
            'rules' => 'required|trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'telefono2',
            'label' => 'Segundo Telefono',
            'rules' => 'trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'correo',
            'label' => 'E-Mail',
            'rules' => 'required|trim|max_length[60]|valid_email|xss_clean'
        )
    ),
    'administrador/consultas/seleccion_crear/modificar_administrador' => array (
        array (
            'field' => 'usuario',
            'label' => 'Usuario',
            'rules' => 'required|trim|max_length[25]|alpha_numeric|xss_clean'
        ),
        array (
            'field' => 'pass',
            'label' => 'Contraseña',
            'rules' => 'trim|max_length[20]|xss_clean'
        ),
        array (
            'field' => 'nombre1',
            'label' => 'Primer Nombre',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'nombre2',
            'label' => 'Segundo Nombre',
            'rules' => 'trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido1',
            'label' => 'Primer Apellido',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'apellido2',
            'label' => 'Segundo Apellido',
            'rules' => 'required|trim|max_length[15]|alpha|xss_clean'
        ),
        array (
            'field' => 'rut',
            'label' => 'Rut',
            'rules' => 'required|trim|max_length[12]|xss_clean'
        ),
        array (
            'field' => 'fecha',
            'label' => 'Fecha de Nacimiento',
            'rules' => 'required|trim|max_length[10]|xss_clean'
        ),
        array (
            'field' => 'telefono1',
            'label' => 'Primer Telefono',
            'rules' => 'required|trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'telefono2',
            'label' => 'Segundo Telefono',
            'rules' => 'trim|max_length[15]|numeric|xss_clean'
        ),
        array (
            'field' => 'correo',
            'label' => 'E-Mail',
            'rules' => 'required|trim|max_length[60]|valid_email|xss_clean'
        ),
        array (
            'field' => 'comuna',
            'label' => 'Comuna',
            'rules' => 'required|max_length[25]|alpha|xss_clean'
        ),
        array (
            'field' => 'direccion',
            'label' => 'Direccion',
            'rules' => 'required|xss_clean'
        )
    ),
    'usuario' => array (
        array (
            'field' => 'usuario',
            'label' => 'Usuario',
            'rules' => 'required|trim|max_length[20]|alpha_numeric|xss_clean'
        )
    ),
    'foro' => array(
        array(
            'field' => 'comentario',
            'label' => 'comentario',
            'rules' => 'required|xss_clean'
        )
    ),
    'trabajo' => array(
        'field' => 'id_trabajo',
        'label' => 'id_trabajo',
        'rules' => 'required|xss_clean'
    ),
    'id_trabajo' => array(
        'field' => 'id_trabajo',
        'label' => 'id_trabajo',
        'rules' => 'required|trim|max_length[9]||alpha_numeric|xss_clean'
    ),
    'descripcion' => array(
        'field' => 'descripcion',
        'label' => 'descripcion',
        'rules' => 'required|xss_clean'
    ),
    'solicitud' => array(
        'field' => 'aceptar',
        'label' => 'aceptar',
        'rules' => 'required|xss_clean'
    )
);
