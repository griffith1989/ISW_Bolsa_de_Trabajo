<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelo_ingresar extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->database();
    }
    function id($permiso,$usuario){
        if($permiso == 'Administrador'){
            $query = $this->db->select("Id_Administrador")->from($permiso)->where("Usuario ="."'".$usuario."'")->get();
            $resultado = $query->row();
            return $resultado->Id_Administrador;
        }
        if($permiso == 'Alumno'){
            $query = $this->db->select("Id_Alumno")->from("Alumno")->where("Usuario ="."'".$usuario."'")->get();
            $result = $query->row();
            return $result->Id_Alumno;
        }
        if($permiso == 'Empleador'){
            $query = $this->db->select("Id_Empleador")->from("Empleador")->where("Usuario ="."'".$usuario."'")->get();
            $result = $query->row();
            return $result->Id_Empleador;
        }
    }
    function datos ($user,$password,$permiso) {
        $query = "select ".$password." from ".$permiso." where Usuario = '".$user."'";
        $query = $this->db->query($query);
        return $query->result();
    }
    function verificar_ingreso($Usuario,$Contrasenia,$Permiso) {
        $where = "'".$Usuario."'";
        $query = $this->db->select("Contrasenia")->from("$Permiso")->where("Usuario = ".$where)->get();
        $resultado = $query->row();
        if($resultado == NULL){
            return FALSE;
        }
        else {
            if($resultado->Contrasenia == $Contrasenia) {
                return TRUE;
            }
            else {
                return FALSE;
            }
        }
    }
    function verificar_usuario($usuario) {
        $this->db->from("Usuarios")->where('Usuario',$username);
        $query = $this->db->get('users');
        if($query->num_rows() == 1)
        {
            $row = $query->row();
            return $row->Usuario;
        }
    }
    function existe_usuario($usuario,$permiso){
        $query = $this->db->select("Usuario")->from($permiso)->where("Usuario ="."'".$usuario."'")->get();
        $result = $query->row();
        if($result == NULL){
            return FALSE;
        }
        else{
            if($result->Usuario == $usuario){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
    }
    function usuario_unico($usuario){
        $query = $this->db->select("Usuario")->from("Usuarios")->where($usuario)->get();
        $result = $query->row();
        if($result == NULL){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
    function usuario_trabajo($id){
        $query = $this->db->select("Usuario")->from("Vacantes")->where("Id_Trabajo ="."'".$id."'")->get();
        return $query->result();
    }
    function acepto_trabajo($id){
        $query = $this->db->select("Id_Trabajo")->from("Vacantes")->where("Id_Alumno =".$this->session->userdata('id'))->get();
        $result = $query->result();
        if($result == NULL){
            return FALSE;
        }
        else{
            foreach ($result as $result){
                if($result->Id_Trabajo == $id){
                    return TRUE;
                }
            }
            return FALSE;
        }
    }
    function validado(){
        $query = $this->db->select("Verificar")->from("Alumno")->where("Id_Alumno =".$this->session->userdata('id'))->get();
        $result = $query->row();
        if($result == NULL){
            return FALSE;
        }
        else{
            if($result->Verificar == TRUE){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }
    }
    function ver_trabajo(){
        $query = $this->db->select("*")->from("Trabajo")->get();
        return $query->result();
    }
    function ver_trabajo_alumno($id){
        $carrera = $this->db->select("Codigo_Carrera")->from("Alumno")->where("Id_Alumno =".$id)->get();
        $result = $carrera->row();
        $query = $this->db->select("*")->from("Trabajo")->where("Codigo_Carrera =".$result->Codigo_Carrera)->get();
        return $query->result();
    }
    function ver_vacantes($id){
        $query = $this->db->select("Id_Trabajo")->from("Vacantes")->where("Id_Alumno =".$this->session->userdata('id'))->get();
        return $query->result();
    }
    function ver_foro(){
        $query = $this->db->select("*")->from("Foro")->order_by("Id_Foro",'desc')->get();
        return $query->result();
    }
    function ver_administrador(){
        $query = $this->db->select("*")->from("Administrador")->get();
        return $query->result();
    }
    function ver_alumno(){
        $query = $this->db->select("*")->from("Alumno")->get();
        return $query->result();
    }
    function ver_empleador(){
        $query = $this->db->select("*")->from("Empleador")->get();
        return $query->result();
    }
    function agregar_alumno($datos = array(),$usuarios = array()) {
        $this->db->insert("Alumno", $datos);
        $this->db->insert("Usuarios",$usuarios);
    }
    function agregar_administrador($datos = array(),$usuarios = array()) {
        $this->db->insert("Administrador", $datos);
        $this->db->insert("Usuarios",$usuarios);
    }
    function agregar_empleador($datos = array(),$usuarios = array()) {
        $this->db->insert("Empleador", $datos);
        $this->db->insert("Usuarios",$usuarios);
    }
    function agregar_trabajo($datos = array()){
        $this->db->insert("Trabajo", $datos);
    }
    function agregar_foro($datos = array()){
        $this->db->insert("Foro",$datos);
    }
    function mostrar_administrador($usuario) {
        $where = "Usuario = '".$usuario."'";
        $query = $this->db->select("*")->from("Administrador")->where($where)->get();
        return $query->row();
    }
    function mostrar_alumno($usuario) {
        $where = "Usuario = '".$usuario."'";
        $query = $this->db->select("*")->from("Alumno")->where($where)->get();
        return $query->row();
    }
    function mostrar_empleador($usuario) {
        $where = "Usuario = '".$usuario."'";
        $query = $this->db->select("*")->from("Empleador")->where($where)->get();
        return $query->row();
    }
    function eliminar_alumno($usuario){
        $this->db->delete('Alumno', array(
            'Usuario' => $usuario
            ));
        $this->db->delete('Usuarios',array(
            'Usuario' => $usuario
        ));
    }
    function eliminar_empleador($usuario){
        $this->db->delete('Empleador', array(
            'Usuario' => $usuario
            ));
        $this->db->delete('Usuarios',array(
            'Usuario' => $usuario
        ));
    }
    function modificar_administrador($usuario,$formulario = array()){
        $this->db->where("Usuario ="."'".$usuario."'");
        $this->db->update("Administrador", $formulario);
    }
    function modificar_alumno($usuario,$formulario = array()){
        $this->db->where("Usuario ="."'".$usuario."'");
        $this->db->update("Alumno", $formulario);
    }
    function modificar_empleador($usuario,$formulario = array()){
        $this->db->where("Usuario ="."'".$usuario."'");
        $this->db->update("Empleador", $formulario);
    }
}