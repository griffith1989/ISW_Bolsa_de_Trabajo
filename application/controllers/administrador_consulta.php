<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrador_consulta extends CI_Controller {
    private $session_id;
    function __construct() {
        parent::__construct();
        $this->load->model('modelo_ingresar');
        $this->session_id = $this->session->userdata('usuario', 'id','permiso');
    }
    function administrador_consultas() {
        if(!empty($this->session_id)){
            $this->load->view('administrador/administrador_consultas');
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
    function administrador_consultas_crear_alumno(){
        if(!empty($this->session_id)){
            $this->load->view('administrador/consultas/seleccion_crear/crear_alumno');
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
    function administrador_consultas_crear_empleador(){
        if(!empty($this->session_id)){
            $this->load->view('administrador/consultas/seleccion_crear/crear_empleador');
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
    function administrador_consultas_crear_administrador(){
        if(!empty($this->session_id)){
            $this->load->view('administrador/consultas/seleccion_crear/crear_administrador');
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
    function administrador_consultas_ver_administrador(){
        if(!empty($this->session_id)){
            $query = $this->modelo_ingresar->ver_administrador();
            $this->load->view('administrador/consultas/seleccion_ver/ver_administrador',  compact("query"));
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
    function administrador_consultas_ver_alumno(){
        if(!empty($this->session_id)){
            $query = $this->modelo_ingresar->ver_alumno();
            $this->load->view('administrador/consultas/seleccion_ver/ver_alumno',  compact("query"));
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
    function administrador_consultas_ver_empleador(){
        if(!empty($this->session_id)){
            $query = $this->modelo_ingresar->ver_empleador();
            $this->load->view('administrador/consultas/seleccion_ver/ver_empleador',  compact("query"));
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
    function administrador_consultas_eliminar_alumno(){
        if(!empty($this->session_id)){
            $query = $this->modelo_ingresar->ver_alumno();
            $this->load->view('administrador/consultas/seleccion_eliminar/eliminar_alumno',  compact("query"));
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
    function administrador_consultas_eliminar_empleador(){
        if(!empty($this->session_id)){
            $query = $this->modelo_ingresar->ver_empleador();
            $this->load->view('administrador/consultas/seleccion_eliminar/eliminar_empleador',  compact("query"));
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
    function administrador_consultas_eliminar_tutor(){
        if(!empty($this->session_id)){
            $this->load->view('administrador/consultas/seleccion_eliminar/eliminar_tutor');
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
    function administrador_consultas_modificar_alumno(){
        if(!empty($this->session_id)){
            $query = $this->modelo_ingresar->ver_alumno();
            $this->load->view('administrador/consultas/seleccion_modificar/modificar_alumno',  compact("query"));
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
    function administrador_consultas_modificar_empleador(){
        if(!empty($this->session_id)){
            $query = $this->modelo_ingresar->ver_empleador();
            $this->load->view('administrador/consultas/seleccion_modificar/modificar_empleador',  compact("query"));
        }
        else {
            $this->load->view('welcome_message');
        }
        
    }
}

