<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="<?php echo base_url('css/administrador.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/desplegar_adm.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/usuario.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/green/style.css') ?>">
    <script src="<?php echo base_url('js/jquery.tablesorter.js'); ?>"></script>
    <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
</head>
<body>
    <div id="encabezado">
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
                            
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/administrador_solicitud')?>">Solicitudes</a></li>
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
                <div id="consultas">
                    <h1>Ver Alumno</h1>
                </div>
                    <?php echo validation_errors();?>
                    <?= form_open(base_url('index.php/proyecto_isw/ver_alumno')) ?>
                    <?php
                      $usuario = array(
                          'name' => 'usuario'
                      );
                    ?>
                        <?= form_label('Usuario','usuario')?>
                        <?= form_input($usuario)?>
                        <?= form_submit('login_entrar','Aceptar')?>
                    <?= form_close()?>
                
                <?php
                    $encabezado = '
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                </tr>
                            </thead>
                            ';
                        $detalle = '<tbody>';
                        foreach ($query as $query) {
                        $detalle .= '
                            <tbody>
                                <tr>
                                    <td>'.$query->Usuario.'</td>
                                </tr>
                            </tbody>
                                ';
                        }
                        $detalle .= '<tbody>';
                    ?>
                    <table class="tablesorter">
                        <?php echo $encabezado;?>
                        <?php echo $detalle;?>
                    </table>
                    <script>
                        $(document).ready(function(){
                            $("table").tablesorter( {sortList: [[0,0], [2,1]]} ); 
                            $("tbody tr").mouseenter(function(){
                                $(this).css("background-color","#CCC");
                            })
                            $("tbody tr").mouseleave(function(){
                                $(this).css("background-color","#FFF");
                            })
                        });
                    </script>
            </div>
        </section>
    </div>
</body>
</html>
