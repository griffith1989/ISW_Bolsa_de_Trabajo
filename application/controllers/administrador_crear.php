<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador_crear extends CI_Controller {
    
    private $session_id;
    function __construct() {
        parent::__construct();
        $this->load->model('modelo_ingresar');
        $this->session_id = $this->session->userdata('usuario', 'id','permiso');
    }
    function crear_alumno(){
        if(!empty($this->session_id)){
            if($this->input->post()){
            
                if ($this->form_validation->run('administrador/consultas/seleccion_crear/crear_alumno') == FALSE)
                {
                        $this->load->view('administrador/consultas/seleccion_crear/crear_alumno');

                }
                else
                {
                    $formulario = array(
                        'Usuario' => $this->input->post('usuario', true),
                        'Contrasenia' => sha1($this->input->post('pass', true)),
                        'Rut' => $this->input->post('rut', true),
                        'Nombre1' => $this->input->post('nombre1', true),
                        'Nombre2' => $this->input->post('nombre2'),
                        'Apellido1' => $this->input->post('apellido1', true),
                        'Apellido2' => $this->input->post('apellido2', true),
                        'Telefono1' => $this->input->post('telefono1', true),
                        'Telefono2' => $this->input->post('telefono2'),
                        'Correo' => $this->input->post('correo', true),
                        'Sexo' => $this->input->post('sexo', true),
                        'Comuna' => $this->input->post('comuna', true),
                        'Direccion' => $this->input->post('direccion', true),
                        'Fecha_Nacimiento' => $this->input->post('fecha', true),
                        'Codigo_Carrera' => $this->input->post('codigo_carrera', true),
                        'Anio_Ingreso' => $this->input->post('anio_ingreso', true),
                        'Id_Administrador' => $this->session->userdata('id'),
                        'Verificar' => 'TRUE'
                    );
                    $usuarios = array ('Usuario' => $this->input->post('usuario', true));
                    if($this->modelo_ingresar->usuario_unico($usuarios) == TRUE){
                        $this->modelo_ingresar->agregar_alumno($formulario,$usuarios);
                        $this->load->view('administrador/consultas/seleccion_crear/crear_alumno');
                    }
                    else{
                        $this->session->set_flashdata('errorMsg', 'El usuario ya existe');
                        $this->load->view('administrador/consultas/seleccion_crear/crear_alumno');
                    }
                }
            }
            else {
                $this->load->view('administrador/consultas/seleccion_crear/crear_alumno');
            }
        }
        else {
            $this->load->view('welcome_message');
        }
        
    
    }
    function crear_administrador(){
        if(!empty($this->session_id)){
            if($this->input->post()){
            
                if ($this->form_validation->run('administrador/consultas/seleccion_crear/crear_administrador') == FALSE)
                {
                        $this->load->view('administrador/consultas/seleccion_crear/crear_administrador');

                }
                else
                {
                    $formulario = array(
                        'Usuario' => $this->input->post('usuario', true),
                        'Contrasenia' => sha1($this->input->post('pass', true)),
                        'Rut' => $this->input->post('rut', true),
                        'Nombre1' => $this->input->post('nombre1', true),
                        'Nombre2' => $this->input->post('nombre2'),
                        'Apellido1' => $this->input->post('apellido1', true),
                        'Apellido2' => $this->input->post('apellido2', true),
                        'Telefono1' => $this->input->post('telefono1', true),
                        'Telefono2' => $this->input->post('telefono2'),
                        'Correo' => $this->input->post('correo', true),
                        'Sexo' => $this->input->post('sexo', true),
                        'Comuna' => $this->input->post('comuna', true),
                        'Direccion' => $this->input->post('direccion', true),
                        'Fecha_Nacimiento' => $this->input->post('fecha', true),
                        'Cargo' => $this->input->post('cargo', true)
                    );
                    $usuarios = array ('Usuario' => $this->input->post('usuario', true));
                    if($this->modelo_ingresar->usuario_unico($usuarios) == TRUE){
                        $this->modelo_ingresar->agregar_administrador($formulario,$usuarios);
                        $this->load->view('administrador/consultas/seleccion_crear/crear_administrador');
                    }
                    else{
                        $this->session->set_flashdata('item', 'El usuario ya existe');
                        $this->load->view('administrador/consultas/seleccion_crear/crear_administrador');
                    }
                }
            }
            else {
                $this->load->view('administrador/consultas/seleccion_crear/crear_administrador');
            }
        }
        else {
            $this->load->view('welcome_message');
        }
        
    
    }
    function crear_empleador(){
        if(!empty($this->session_id)){
            if($this->input->post()){
            
                if ($this->form_validation->run('administrador/consultas/seleccion_crear/crear_empleador') == FALSE)
                {
                        $this->load->view('administrador/consultas/seleccion_crear/crear_empleador');

                }
                else
                {
                    $formulario = array(
                        'Usuario' => $this->input->post('usuario', true),
                        'Contrasenia' => sha1($this->input->post('pass', true)),
                        'Nombre1' => $this->input->post('nombre1', true),
                        'Nombre2' => $this->input->post('nombre2'),
                        'Apellido1' => $this->input->post('apellido1', true),
                        'Apellido2' => $this->input->post('apellido2', true),
                        'Telefono1' => $this->input->post('telefono1', true),
                        'Telefono2' => $this->input->post('telefono2'),
                        'Correo' => $this->input->post('correo', true),
                        'Sexo' => $this->input->post('sexo', true),
                        'Id_Administrador' => $this->session->userdata('id'),
                        'Verificar' => 'TRUE'
                    );
                    $usuarios = array ('Usuario' => $this->input->post('usuario', true));
                    if($this->modelo_ingresar->usuario_unico($usuarios) == TRUE){
                        $this->modelo_ingresar->agregar_empleador($formulario,$usuarios);
                        $this->load->view('administrador/consultas/seleccion_crear/crear_empleador');
                    }
                    else{
                        $this->session->set_flashdata('item', 'El usuario ya existe');
                        $this->load->view('administrador/consultas/seleccion_crear/crear_empleador');
                    }
                }
            }
            else {
                $this->load->view('administrador/consultas/seleccion_crear/crear_empleador');
            }
        }
        else {
            $this->load->view('welcome_message');
        }
        
    
    }
}

