<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="<?php echo base_url('css/administrador.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/desplegar_adm.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/usuario.css') ?>">
    <script src="http://code.jquery.com/jquery-2.0.3.js"></script>
    <script src="<?php echo base_url('js/jquery.Rut.js'); ?>"></script>
</head>
<body>
    <div>
        <header>
            <hgroup>
                <h1> UTEM Bolsa de Trabajo </h1><br>
            </hgroup>
            
                    <div id="header">
                        <ul class ="nav">
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/administrador_inicio')?>">Inicio</a></li>

                            <li><a>Consultas</a>
                                <ul>
                                    <li> <a>Crear</a>
                                        <ul>
                                            <li> <a href="<?php echo base_url('index.php/administrador_consulta/administrador_consultas_crear_administrador')?>">Administrador</a></li>
                                            <li> <a href="<?php echo base_url('index.php/administrador_consulta/administrador_consultas_crear_alumno')?>">Alumno</a></li>
                                            <li> <a href="<?php echo base_url('index.php/administrador_consulta/administrador_consultas_crear_empleador')?>">Empleador</a></li>
                                        </ul>
                                    </li>
                                    <li> <a>ver</a>
                                        <ul>
                                            <li> <a href="<?php echo base_url('index.php/administrador_consulta/administrador_consultas_ver_administrador')?>">Administrador</a></li>
                                            <li> <a href="<?php echo base_url('index.php/administrador_consulta/administrador_consultas_ver_alumno')?>">Alumno</a></li>
                                            <li> <a href="<?php echo base_url('index.php/administrador_consulta/administrador_consultas_ver_empleador')?>">Empleador</a></li>
                                        </ul>
                                    </li>
                                    <li> <a>modificar</a>
                                        <ul>
                                            <li> <a href="<?php echo base_url('index.php/administrador_consulta/administrador_consultas_modificar_alumno')?>">Alumno</a></li>
                                            <li> <a href="<?php echo base_url('index.php/administrador_consulta/administrador_consultas_modificar_empleador')?>">Empleador</a></li>
                                        </ul>
                                    </li>
                                    <li> <a>eliminar</a>
                                        <ul>
                                            <li> <a href="<?php echo base_url('index.php/administrador_consulta/administrador_consultas_eliminar_alumno')?>">Alumno</a></li>
                                            <li> <a href="<?php echo base_url('index.php/administrador_consulta/administrador_consultas_eliminar_empleador')?>">Empleador</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/administrador_trabajos')?>">Trabajo</a></li>
                            
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/administrador_foro')?>">Foro</a></li>
                            
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/administrador_solicitud')?>">solicitudes</a></li>
                        </ul>
                    </div>
            
        </header>
        <br><br><br><br>
        <div id="usuario">
            <a href="<?php echo base_url('index.php/proyecto_isw/ver_perfil_administrador')?>"> <?php echo $this->session->userdata('usuario')?> </a>    
            <a href="<?php echo base_url('index.php/proyecto_isw/salir')?>"> Salir </a>
        </div>
        <br>
        <section>
            <div id="texto_adm">
                    <h1>Crear Empleador</h1>
                    
                    <?php echo validation_errors();?>
                    <?= form_open(base_url('index.php/administrador_modificar/modificar_empleador')) ?>
                  <?php
                    $usuario_referencia = array (
                          'name' => 'usuario_referencia',
                          'value' => $query->Usuario
                      );
                    $pass_referencia = array (
                        'name' => 'pass_antiguo',
                        'value' => $query->Contrasenia
                    );
                    $usuario = array(
                        'name' => 'usuario',
                        'Placeholder' => 'Usuario',
                        'value' => $query->Usuario
                    );
                    $pass = array(
                        'name' => 'pass',
                        'Placeholder' => 'Contraseña',
                        'value' => $query->Contrasenia
                    );
                    $nombre1 = array(
                        'name' => 'nombre1',
                        'Placeholder' => 'Nombre',
                        'value' => $query->Nombre1
                    );
                    $nombre2 = array(
                        'name' => 'nombre2',
                        'Placeholder' => 'Nombre',
                        'value' => $query->Nombre2
                    );
                    $apellido1 = array(
                        'name' => 'apellido1',
                        'Placeholder' => 'Apellido',
                        'value' => $query->Apellido1
                    );
                    $apellido2 = array(
                        'name' => 'apellido2',
                        'Placeholder' => 'Apellido',
                        'value' => $query->Apellido2
                    );
                    
                    
                    $correo = array(
                        'name' => 'correo',
                        'Placeholder' => 'E-Mail',
                        'value' => $query->Correo
                    );
                    $sexo = 'sexo';
                    $opciones = array(
                        'TRUE' => 'Masculino',
                        'FALSE' => 'Femenino'
                    );
                    $telefono1 = array(
                        'name' => 'telefono1',
                        'Placeholder' => 'Primer Telefono',
                        'value' => $query->Telefono1
                    );
                    $telefono2 = array(
                        'name' => 'telefono2',
                        'Placeholder' => 'Segundo Telefono',
                        'value' => $query->Telefono2
                    );
                    ?>
                    
                    <?php
                    if ( $this->session->flashdata('item') != '' )
                    {
                            ?>
                    <p style="color: red;">
                            <?php echo $this->session->flashdata('item'); ?>
                    </p>
                    
                    <?php } ?>
                    
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#rut').Rut({
                                on_error: function() {
                                    alert('El rut ingresado es incorrecto');
                                }
                            });
                        });

                    </script>
                    
                    <br>_______Datos de Inicio____________________________________________________________________________________
                    <br><br>
                    <?= form_hidden('usuario_referencia',$query->Usuario) ?>
                    <?= form_hidden('pass_antiguo',$query->Contrasenia)?>
                    <?= form_label('Usuario','usuario')?>
                    <?= form_input($usuario)?><br><br>
                    <?= form_label('Contraseña','pass')?>
                    <?= form_input($pass)?><br><br>
                    <br>_______Datos de Personales____________________________________________________________________________________
                    <br><br>
                    <?= form_label('Primer Nombre','nombre1')?>
                    <?= form_input($nombre1)?><br><br>
                    <?= form_label('Segundo Nombre','nombre2')?>
                    <?= form_input($nombre2)?><br><br>
                    <?= form_label('Primer Apellido','apellido1')?>
                    <?= form_input($apellido1)?><br><br>
                    <?= form_label('Segundo Apellido','apellido2')?>
                    <?= form_input($apellido2)?><br><br>
                    <?= form_label('Género','sexo')?>
                    <?= form_dropdown($sexo,$opciones)?><br><br>
                    <br>_______Datos de Ubicación____________________________________________________________________________________
                    <br><br>
                    <?= form_label('Primer Telefono','telefono1')?>
                    <?= form_input($telefono1)?><br><br>
                    <?= form_label('Segundo Telefono','telefono2')?>
                    <?= form_input($telefono2)?><br><br>
                    <?= form_label('E-Mail','correo')?>
                    <?= form_input($correo)?><br><br>
                    <?= form_submit('login_entrar','Aceptar')?>
                <?= form_close()?>
            </div>
        </section>
    </div>



