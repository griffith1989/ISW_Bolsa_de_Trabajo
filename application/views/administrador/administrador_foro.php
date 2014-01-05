<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/administrador.css">
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/desplegar_adm.css">
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/usuario.css">
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="http://localhost/ISW_Bolsa_de_Trabajo/js/script_inicio.js"></script>
</head>
<body>
    <div>
        <header>
            <hgroup>
                <h1> UTEM Bolsa de Trabajo </h1><br>
            </hgroup>
            <div id="header">
                        <ul class ="nav">
                            <li><a href = "<?php echo base_url()?>proyecto_isw/administrador_inicio">Inicio</a></li>

                            <li><a>Consultas</a>
                                <ul>
                                    <li> <a>Crear</a>
                                        <ul>
                                            <li> <a href="<?php echo base_url()?>administrador_consulta/administrador_consultas_crear_administrador">Administrador</a></li>
                                            <li> <a href="<?php echo base_url()?>administrador_consulta/administrador_consultas_crear_alumno">Alumno</a></li>
                                            <li> <a href="<?php echo base_url()?>administrador_consulta/administrador_consultas_crear_empleador">Empleador</a></li>
                                        </ul>
                                    </li>
                                    <li> <a>ver</a>
                                        <ul>
                                            <li> <a href="<?php echo base_url()?>administrador_consulta/administrador_consultas_ver_administrador">Administrador</a></li>
                                            <li> <a href="<?php echo base_url()?>administrador_consulta/administrador_consultas_ver_alumno">Alumno</a></li>
                                            <li> <a href="<?php echo base_url()?>administrador_consulta/administrador_consultas_ver_empleador">Empleador</a></li>
                                        </ul>
                                    </li>
                                    <li> <a>modificar</a>
                                        <ul>
                                            <li> <a href="<?php echo base_url()?>administrador_consulta/administrador_consultas_modificar_alumno">Alumno</a></li>
                                            <li> <a href="<?php echo base_url()?>administrador_consulta/administrador_consultas_modificar_empleador">Empleador</a></li>
                                        </ul>
                                    </li>
                                    <li> <a>eliminar</a>
                                        <ul>
                                            <li> <a href="<?php echo base_url()?>administrador_consulta/administrador_consultas_eliminar_alumno">Alumno</a></li>
                                            <li> <a href="<?php echo base_url()?>administrador_consulta/administrador_consultas_eliminar_empleador">Empleador</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li><a href = "<?php echo base_url()?>proyecto_isw/administrador_trabajos">Trabajo</a></li>
                            
                            <li><a href = "<?php echo base_url()?>proyecto_isw/administrador_foro">Foro</a></li>
                            
                            <li><a href = "<?php echo base_url()?>proyecto_isw/administrador_solicitud">solicitudes</a></li>
                        </ul>
                    </div>
            
        </header>
        <br><br><br><br>
        <div id="usuario">
            <a href="<?php echo base_url()?>proyecto_isw/ver_perfil_administrador"> <?php echo $this->session->userdata('usuario')?> </a>    
            <a href="<?php echo base_url()?>proyecto_isw/salir"> Salir </a>
        </div>
        <br>
        <section>
            <div id="texto_adm">
                    <h1>Foro</h1>
                    
                    <?php echo validation_errors();?>
                    <?= form_open(base_url()."proyecto_isw/administrador_trabajo") ?>
                    <?php
                        $titulo = array(
                            'name' => 'titulo'
                        );
                        $comentario = array(
                            'name' => 'comentario'
                        )
                    ?>
                    <?= form_label('Titulo','titulo')?>
                    <?= form_input($titulo)?>
                    <?= form_label('Comentario','comentario')?>
                    <?= form_input($comentario)?>
                    <?= form_close()?>
                    
                    
                    <?php foreach ($query as $query){?>
                    <div id="foro">
                        <div id="titulo">
                            <h2><?php $query->Usuario ?></h2>
                            <h3><?php $query->Permiso_Usuario ?></h3>
                        </div>
                        <div>
                            11111
                        </div>
                    </div>
                    <?php } ?>
            </div>
        </section>
    </div>
</body>
</html>