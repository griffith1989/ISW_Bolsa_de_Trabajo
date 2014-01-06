<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Proyecto_isw extends CI_Controller {

    private $session_id;

    function __construct() {
        parent::__construct();
        $this->load->model('modelo_ingresar');
        $this->session_id = $this->session->userdata('usuario', 'id','permiso');
    }
    function ver_ingresar() {
        $this->load->view('ingresar');
    }
    function ver_inicio(){
        $this->load->view('welcome_message');
    }
    function ver_foro() {
        $this->load->view('foro');
    }
    function administrador_inicio() {
        if (!empty($this->session_id)) {
            $this->load->view('administrador/administrador_inicio');
        } else {
            $this->load->view('welcome_message');
        }
    }
    function administrador_foro() {
        if (!empty($this->session_id)) {
            $query = $this->modelo_ingresar->ver_foro();
            $this->load->view('administrador/administrador_foro',  compact("query"));
        } else {
            $this->load->view('welcome_message');
        }
    }
    function administrador_resultado_foro(){
        if (!empty($this->session_id)) {
            if ($this->input->post()) {
                $datestring = "%Y-%m-%d - %h:%i %a";
                $fecha = mdate($datestring);
                $formulario = array(
                    'Usuario' => $this->session->userdata('usuario'),
                    'Titulo' => $this->input->post('titulo'),
                    'Mensaje' => $this->input->post('comentario'),
                    'Permiso_Usuario' => $this->session->userdata('permiso'),
                    'Fecha_Posteo' => $fecha
                );
                $this->modelo_ingresar->agregar_foro($formulario);
                $query = $this->modelo_ingresar->ver_foro();
                $this->load->view('administrador/administrador_foro',  compact("query"));
            } 
            else {
                $this->load->view('administrador/administrador_foro');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }
    function administrador_trabajos() {
        if (!empty($this->session_id)) {
            $query = $this->modelo_ingresar->ver_trabajo();
            $this->load->view('administrador/administrador_trabajo',  compact("query"));
        } else {
            $this->load->view('welcome_message');
        }
    }
    function alumno_inicio(){
        if (!empty($this->session_id)) {
            $query = $this->modelo_ingresar->ver_trabajo_alumno($this->session->userdata('id'));
            $vacantes = $this->modelo_ingresar->ver_vacantes($this->session->userdata('id'));
            $this->load->view('alumno/alumno_inicio',  compact("query","vacantes"));
        } else {
            $this->load->view('welcome_message');
        }
    }
    function alumno_foro(){
        if (!empty($this->session_id)) {
            $this->load->view('alumno/alumno_foro');
        } else {
            $this->load->view('welcome_message');
        }
    }
    function empleador_inicio(){
        if (!empty($this->session_id)) {
            $this->load->view('empleador/empleador_inicio');
        } else {
            $this->load->view('welcome_message');
        }
    }
    function empleador_trabajos() {
        if (!empty($this->session_id)) {
            $query = $this->modelo_ingresar->ver_trabajo();
            $this->load->view('empleador/empleador_trabajo',  compact("query"));
        } else {
            $this->load->view('welcome_message');
        }
    }
    function empleador_foro(){
        if (!empty($this->session_id)) {
            $this->load->view('empleador/empleador_foro');
        } else {
            $this->load->view('welcome_message');
        }
    }
    function ver_perfil_administrador() {
        if (!empty($this->session_id)) {
            $query = $this->modelo_ingresar->mostrar_administrador($this->session->userdata('usuario'));
            $this->load->view('administrador/perfil_administrador', compact("query"));
        } else {
            $this->load->view('welcome_message');
        }
    }
    function ver_perfil_alumno(){
        if (!empty($this->session_id)) {
            $query = $this->modelo_ingresar->mostrar_alumno($this->session->userdata('usuario'));
            $this->load->view('alumno/perfil_alumno', compact("query"));
        } else {
            $this->load->view('welcome_message');
        }
    }
    function ver_administrador() {
        if (!empty($this->session_id)) {
            if ($this->input->post()) {

                if ($this->form_validation->run('usuario') == FALSE) {
                    $query = $this->modelo_ingresar->ver_administrador();
                    $this->load->view('administrador/consultas/seleccion_ver/ver_administrador',  compact("query"));
                } else {
                    $usuario = $this->input->post('usuario');
                    if($this->modelo_ingresar->existe_usuario($usuario,'Administrador') == TRUE){
                        $query = $this->modelo_ingresar->mostrar_administrador($usuario);
                        $this->load->view('administrador/consultas/seleccion_ver/resultado_ver_administrador', compact("query"));
                    }
                    else{
                        $query = $this->modelo_ingresar->ver_administrador();
                        $this->load->view('administrador/consultas/seleccion_ver/ver_administrador',  compact("query"));
                    }
                }
            } else {
                $this->load->view('administrador/consultas/seleccion_ver/ver_administrador');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }
    function ver_alumno() {
        if (!empty($this->session_id)) {
            if ($this->input->post()) {

                if ($this->form_validation->run('usuario') == FALSE) {
                    $query = $this->modelo_ingresar->ver_alumno();
                    $this->load->view('administrador/consultas/seleccion_ver/ver_alumno',  compact("query"));
                } else {
                    $usuario = $this->input->post('usuario');
                    if($this->modelo_ingresar->existe_usuario($usuario,'Alumno') == TRUE){
                        $query = $this->modelo_ingresar->mostrar_alumno($usuario);
                        $this->load->view('administrador/consultas/seleccion_ver/resultado_ver_alumno', compact("query"));
                    }
                    else{
                        $query = $this->modelo_ingresar->ver_alumno();
                        $this->load->view('administrador/consultas/seleccion_ver/ver_alumno',  compact("query"));
                    }
                }
            } else {
                $this->load->view('administrador/consultas/seleccion_ver/ver_alumno');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }

    function ver_empleador() {
        if (!empty($this->session_id)) {
            if ($this->input->post()) {

                if ($this->form_validation->run('usuario') == FALSE) {
                    $query = $this->modelo_ingresar->ver_empleador();
                    $this->load->view('administrador/consultas/seleccion_ver/ver_empleador',  compact("query"));
                } else {
                    $usuario = $this->input->post('usuario');
                    if($this->modelo_ingresar->existe_usuario($usuario,'Empleador') == TRUE){
                        $query = $this->modelo_ingresar->mostrar_empleador($usuario);
                        $this->load->view('administrador/consultas/seleccion_ver/resultado_ver_empleador', compact("query"));
                    }
                    else{
                        $query = $this->modelo_ingresar->ver_empleador();
                        $this->load->view('administrador/consultas/seleccion_ver/ver_empleador',  compact("query"));
                    }
                }
            } else {
                $this->load->view('administrador/consultas/seleccion_ver/ver_empleador');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }

    function eliminar_alumno() {
        if (!empty($this->session_id)) {
            if ($this->input->post()) {

                if ($this->form_validation->run('usuario') == FALSE) {
                    $query = $this->modelo_ingresar->ver_alumno();
                    $this->load->view('administrador/consultas/seleccion_eliminar/eliminar_alumno',  compact("query"));
                } else {
                    $usuario = $this->input->post('usuario');
                    $this->modelo_ingresar->eliminar_alumno($usuario);
                    $query = $this->modelo_ingresar->ver_alumno();
                    $this->load->view('administrador/consultas/seleccion_eliminar/eliminar_alumno',  compact("query"));
                }
            } else {
                $this->load->view('administrador/consultas/seleccion_eliminar/eliminar_alumno');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }

    function eliminar_empleador() {
        if (!empty($this->session_id)) {
            if ($this->input->post()) {

                if ($this->form_validation->run('usuario') == FALSE) {
                    $query = $this->modelo_ingresar->ver_empleador();
                    $this->load->view('administrador/consultas/seleccion_eliminar/eliminar_empleador',  compact("query"));
                } else {
                    $usuario = $this->input->post('usuario');
                    $this->modelo_ingresar->eliminar_empleador($usuario);
                    $query = $this->modelo_ingresar->ver_empleador();
                    $this->load->view('administrador/consultas/seleccion_eliminar/eliminar_empleador',  compact("query"));
                }
            } else {
                $this->load->view('administrador/consultas/seleccion_eliminar/eliminar_empleador');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }
    function ver_modificar_administrador() {
        if (!empty($this->session_id)) {
            if ($this->input->post()) {
                    $usuario = $this->session->userdata('usuario');
                    $query = $this->modelo_ingresar->mostrar_administrador($usuario);
                    $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_administrador',  compact("query"));
            } else {
                $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_administrador');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }
    function ver_modificar_perfil_alumno() {
        if (!empty($this->session_id)) {
            if ($this->input->post()) {
                    $usuario = $this->session->userdata('usuario');
                    $query = $this->modelo_ingresar->mostrar_alumno($usuario);
                    $this->load->view('alumno/alumno_modificar',  compact("query"));
            } else {
                $this->load->view('alumno_inicio');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }
    function ver_modificar_alumno() {
        if (!empty($this->session_id)) {
            if ($this->input->post()) {

                if ($this->form_validation->run('usuario') == FALSE) {
                    $query = $this->modelo_ingresar->ver_alumno();
                    $this->load->view('administrador/consultas/seleccion_modificar/modificar_alumno',  compact("query"));
                } else {
                    $usuario = $this->input->post('usuario');
                    if($this->modelo_ingresar->existe_usuario($usuario,'Alumno') == TRUE){
                        $query = $this->modelo_ingresar->mostrar_alumno($usuario);
                        $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_alumno', compact("query"));
                    }
                    else{
                        $query = $this->modelo_ingresar->ver_alumno();
                        $this->load->view('administrador/consultas/seleccion_modificar/modificar_alumno',  compact("query"));
                    }
                }
            } else {
                $this->load->view('administrador/consultas/seleccion_modificar/modificar_alumno');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }

    function ver_modificar_empleador() {
        if (!empty($this->session_id)) {
            if ($this->input->post()) {

                if ($this->form_validation->run('usuario') == FALSE) {
                    $query = $this->modelo_ingresar->ver_empleador();
                    $this->load->view('administrador/consultas/seleccion_modificar/modificar_empleador',  compact("query"));
                } else {
                    $usuario = $this->input->post('usuario');
                    if($this->modelo_ingresar->existe_usuario($usuario,'Empleador') == TRUE){
                        $query = $this->modelo_ingresar->mostrar_empleador($usuario);
                        $this->load->view('administrador/consultas/seleccion_modificar/resultado_modificar_empleador', compact("query"));
                    }
                    else{
                        $query = $this->modelo_ingresar->ver_empleador();
                        $this->load->view('administrador/consultas/seleccion_modificar/modificar_empleador',  compact("query"));
                    }
                }
            } else {
                $this->load->view('administrador/consultas/seleccion_modificar/modificar_empleador');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }
    function administrador_trabajo(){
        if (!empty($this->session_id)) {
            if ($this->input->post()) {
                $codigo_carrera = $this->input->post('codigo_carrera');
                $descripcion = $this->input->post('descripcion');
                if($this->session->userdata('permiso') == 'Administrador'){
                    $id_administrador = $this->session->userdata('id');
                    $id_empleador = NULL;
                }
                else{
                    $id_administrador = NULL;
                    $id_empleador = $this->session->userdata('id');
                }
                $datestring = "%Y-%m-%d - %h:%i %a";
                $fecha = mdate($datestring);
                $formulario = array(
                    'Descripcion' => $descripcion,
                    'Vigencia' => 'TRUE',
                    'Fecha_Posteo' => $fecha,
                    'Codigo_Carrera' => $codigo_carrera,
                    'Id_Administrador' => $id_administrador,
                    'Id_Empleador' => $id_empleador,
                    'Usuario' => $this->session->userdata('usuario')
                );
                $this->modelo_ingresar->agregar_trabajo($formulario);
                $query = $this->modelo_ingresar->ver_trabajo();
                $this->load->view('administrador/administrador_trabajo',  compact("query"));
            } 
            else {
                $this->load->view('administrador/administrador_trabajo');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }
    function empleador_trabajo(){
        if (!empty($this->session_id)) {
            if ($this->input->post()) {
                $codigo_carrera = $this->input->post('codigo_carrera');
                $descripcion = $this->input->post('descripcion');
                if($this->session->userdata('permiso') == 'Administrador'){
                    $id_administrador = $this->session->userdata('id');
                    $id_empleador = NULL;
                }
                else{
                    $id_administrador = NULL;
                    $id_empleador = $this->session->userdata('id');
                }
                $datestring = "%Y-%m-%d - %h:%i %a";
                $fecha = mdate($datestring);
                $formulario = array(
                    'Descripcion' => $descripcion,
                    'Vigencia' => 'TRUE',
                    'Fecha_Posteo' => $fecha,
                    'Codigo_Carrera' => $codigo_carrera,
                    'Id_Administrador' => $id_administrador,
                    'Id_Empleador' => $id_empleador,
                    'Usuario' => $this->session->userdata('usuario')
                );
                $this->modelo_ingresar->agregar_trabajo($formulario);
                $query = $this->modelo_ingresar->ver_trabajo();
                $this->load->view('empleador/empleador_trabajo',  compact("query"));
            } 
            else {
                $this->load->view('empleador/empleador_trabajo');
            }
        } else {
            $this->load->view('welcome_message');
        }
    }
    function validar_ingreso() {

        if ($this->input->post()) {

            if ($this->form_validation->run('ingresar') == FALSE) {
                $this->load->view('ingresar');
            } else {
                $Usuario = $this->input->post('Usuario');
                $Contrasenia = sha1($this->input->post('Contrasenia'));
                $Permiso = $this->input->post('Permiso');
                $Resultado = $this->modelo_ingresar->verificar_ingreso($Usuario, $Contrasenia, $Permiso);

                if ($Resultado == TRUE) {
                    $this->session->set_userdata("item");
                    $id = $this->modelo_ingresar->id($Permiso, $Usuario);
                    $datos = array(
                        'id' => $id,
                        'usuario' => $Usuario,
                        'permiso' => $Permiso
                    );
                    $this->session->set_userdata($datos);
                    if ($Permiso == 'Administrador') {
                        $this->load->view('administrador/administrador_inicio');
                    }
                    if ($Permiso == 'Alumno') {
                        $query = $this->modelo_ingresar->ver_trabajo_alumno($this->session->userdata('id'));
                        $vacantes = $this->modelo_ingresar->ver_vacantes($this->session->userdata('id'));
                        $this->load->view('alumno/alumno_inicio',  compact("query","vacantes"));
                    }
                    if ($Permiso == 'Empleador') {
                        $this->load->view('empleador/empleador_inicio');
                    }
                } else {
                    $this->session->set_flashdata('item', 'Usuario y/o Contraseña invalida');
                    $this->load->view('ingresar');
                }
            }
        } else {
            $this->load->view('ingresar');
        }
    }

    function salir() {
        $this->session->unset_userdata(array(
            'id' => '',
            'usuario' => '',
            'permiso' => ''
        ));
        $this->session->sess_destroy('item');
        $this->load->view('ingresar');
    }

}
