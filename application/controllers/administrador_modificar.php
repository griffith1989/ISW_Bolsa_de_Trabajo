<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador_modificar extends CI_Controller {
    private $session_id;
    function __construct() {
        parent::__construct();
        $this->load->model('modelo_ingresar');
        $this->session_id = $this->session->userdata('usuario', 'id','permiso');
    }
    function modificar_administrador(){
        if(!empty($this->session_id)){
            if($this->input->post()){
            
                if ($this->form_validation->run('administrador/consultas/seleccion_crear/modificar_administrador') == FALSE)
                {
                    $usuario = $this->session->userdata('usuario');
                    $query = $this->modelo_ingresar->mostrar_administrador($usuario);
                    $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_administrador', compact("query"));

                }
                else
                {
                    $usuario_referencia = $this->input->post('usuario_referencia');
                    if($this->input->post('pass') == NULL){
                        $pass = $this->input->post('pass_antiguo');
                    }
                    else{
                        $pass = sha1($this->input->post('pass'));
                    }
                    $nuevo_usuario = array(
                        'Usuario' => $this->input->post('usuario', true));
                    $formulario = array(
                        'Usuario' => $this->input->post('usuario', true),
                        'Contrasenia' => $pass,
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
                    if($this->modelo_ingresar->usuario_unico($nuevo_usuario) == TRUE or $this->input->post('usuario', true) == $usuario_referencia){
                        $this->modelo_ingresar->modificar_administrador($usuario_referencia,$formulario);
                        $this->session->set_userdata('usuario',$this->input->post('usuario', true));
                        $query = $this->modelo_ingresar->mostrar_administrador($this->session->userdata('usuario'));
                        $this->load->view('administrador/perfil_administrador', compact("query"));
                    }
                    else{
                        $usuario = $this->session->userdata('usuario');
                        $query = $this->modelo_ingresar->mostrar_administrador($usuario);
                        $this->session->set_flashdata('item', 'El usuario ya existe');
                        $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_administrador', compact("query"));
                    }
                }
            }
            else{
                $this->load->view('administrador/administrador_inicio');
            }
        }
        else {
            $this->load->view('welcome_message');
        }
    }
    function modificar_alumno() {
        if(!empty($this->session_id)){
            if($this->input->post()){
            
                if ($this->form_validation->run('administrador/consultas/seleccion_crear/modificar_alumno') == FALSE)
                {
                    $usuario = $this->input->post('usuario_referencia');
                    $query = $this->modelo_ingresar->mostrar_alumno($usuario);
                    $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_administrador', compact("query"));

                }
                else
                {
                    $usuario_referencia = $this->input->post('usuario_referencia');
                    if($this->input->post('pass') == NULL){
                        $pass = $this->input->post('pass_antiguo');
                    }
                    else{
                        $pass = sha1($this->input->post('pass'));
                    }
                    $formulario = array(
                        'Usuario' => $this->input->post('usuario'),
                        'Contrasenia' => $pass,
                        'Rut' => $this->input->post('rut'),
                        'Nombre1' => $this->input->post('nombre1'),
                        'Nombre2' => $this->input->post('nombre2'),
                        'Apellido1' => $this->input->post('apellido1'),
                        'Apellido2' => $this->input->post('apellido2'),
                        'Telefono1' => $this->input->post('telefono1'),
                        'Telefono2' => $this->input->post('telefono2'),
                        'Correo' => $this->input->post('correo'),
                        'Sexo' => $this->input->post('sexo'),
                        'Comuna' => $this->input->post('comuna'),
                        'Direccion' => $this->input->post('direccion'),
                        'Fecha_Nacimiento' => $this->input->post('fecha'),
                        'Codigo_Carrera' => $this->input->post('codigo_carrera'),
                        'Anio_Ingreso' => $this->input->post('anio_ingreso')
                    );
                    $nuevo_usuario = array('Usuario' => $this->input->post('usuario'));
                    if($this->modelo_ingresar->usuario_unico($nuevo_usuario) == TRUE or $this->input->post('usuario') == $usuario_referencia){
                        $this->modelo_ingresar->modificar_alumno($usuario_referencia,$formulario);
                        $query = $this->modelo_ingresar->ver_alumno();
                        $this->load->view('administrador/consultas/seleccion_modificar/modificar_alumno',  compact("query"));
                    }
                    else{
                        $this->session->set_flashdata('item', 'El usuario ya existe');
                        $usuario = $this->input->post('usuario_referencia');
                        $query = $this->modelo_ingresar->mostrar_alumno($usuario);
                        $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_alumno', compact("query"));
                    }
                }
            }
            else{
                $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_alumno');
            }
        }
        else {
            $this->load->view('welcome_message');
        }        
    }
    function modificar_empleador() {
        if(!empty($this->session_id)){
            if($this->input->post()){
            
                if ($this->form_validation->run('administrador/consultas/seleccion_crear/modificar_empleador') == FALSE)
                {
                    $usuario = $this->input->post('usuario_referencia');
                    $query = $this->modelo_ingresar->mostrar_empleador($usuario);
                    $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_empleador', compact("query"));

                }
                else
                {
                    $usuario_referencia = $this->input->post('usuario_referencia');
                    if($this->input->post('pass') == NULL){
                        $pass = $this->input->post('pass_antiguo');
                    }
                    else{
                        $pass = sha1($this->input->post('pass'));
                    }
                    $formulario = array(
                        'Usuario' => $this->input->post('usuario'),
                        'Contrasenia' => $pass,
                        'Nombre1' => $this->input->post('nombre1'),
                        'Nombre2' => $this->input->post('nombre2'),
                        'Apellido1' => $this->input->post('apellido1'),
                        'Apellido2' => $this->input->post('apellido2'),
                        'Telefono1' => $this->input->post('telefono1'),
                        'Telefono2' => $this->input->post('telefono2'),
                        'Correo' => $this->input->post('correo'),
                        'Sexo' => $this->input->post('sexo')
                    );
                    if($this->modelo_ingresar->usuario_unico($nuevo_usuario) == TRUE or $this->input->post('usuario') == $usuario_referencia){
                        $this->modelo_ingresar->modificar_alumno($usuario_referencia,$formulario);
                        $query = $this->modelo_ingresar->ver_empleador();
                        $this->load->view('administrador/consultas/seleccion_modificar/modificar_empleador',  compact("query"));
                    }
                    else{
                        $this->session->set_flashdata('item', 'El usuario ya existe');
                        $usuario = $this->input->post('usuario_referencia');
                        $query = $this->modelo_ingresar->mostrar_empleador($usuario);
                        $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_empleador', compact("query"));
                    }
                }
            }
            else{
                $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_empleador');
            }
        }
        else {
            $this->load->view('welcome_message');
        }
        
                
    }
    function modificar_perfil_alumno(){
        if(!empty($this->session_id)){
            if($this->input->post()){
            
                if ($this->form_validation->run('administrador/consultas/seleccion_crear/modificar_alumno') == FALSE)
                {
                    $usuario = $this->session->userdata('usuario');
                    $query = $this->modelo_ingresar->mostrar_alumno($usuario);
                    $this->load->view('alumno/alumno_modificar', compact("query"));

                }
                else
                {
                    $usuario_referencia = $this->input->post('usuario_referencia');
                    if($this->input->post('pass') == NULL){
                        $pass = $this->input->post('pass_antiguo');
                    }
                    else{
                        $pass = sha1($this->input->post('pass'));
                    }
                    $formulario = array(
                        'Usuario' => $this->input->post('usuario'),
                        'Contrasenia' => $pass,
                        'Rut' => $this->input->post('rut'),
                        'Nombre1' => $this->input->post('nombre1'),
                        'Nombre2' => $this->input->post('nombre2'),
                        'Apellido1' => $this->input->post('apellido1'),
                        'Apellido2' => $this->input->post('apellido2'),
                        'Telefono1' => $this->input->post('telefono1'),
                        'Telefono2' => $this->input->post('telefono2'),
                        'Correo' => $this->input->post('correo'),
                        'Sexo' => $this->input->post('sexo'),
                        'Comuna' => $this->input->post('comuna'),
                        'Direccion' => $this->input->post('direccion'),
                        'Fecha_Nacimiento' => $this->input->post('fecha'),
                        'Codigo_Carrera' => $this->input->post('codigo_carrera'),
                        'Anio_Ingreso' => $this->input->post('anio_ingreso')
                    );
                    $nuevo_usuario = array('Usuario' => $this->input->post('usuario'));
                    if($this->modelo_ingresar->usuario_unico($nuevo_usuario) == TRUE or $this->input->post('usuario') == $usuario_referencia){
                        $this->modelo_ingresar->modificar_alumno($usuario_referencia,$formulario);
                        $this->session->set_userdata('usuario',$this->input->post('usuario', true));
                        $query = $this->modelo_ingresar->mostrar_alumno($this->session->userdata('usuario'));
                        $this->load->view('alumno/alumno_modificar', compact("query"));
                    }
                    else{
                        $this->session->set_flashdata('item', 'El usuario ya existe');
                        $usuario = $this->input->post('usuario_referencia');
                        $query = $this->modelo_ingresar->mostrar_alumno($usuario);
                        $this->load->view('alumno/alumno_modificar', compact("query"));
                    }
                }
            }
            else{
                $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_alumno');
            }
        }
        else {
            $this->load->view('welcome_message');
        }
    }
}

