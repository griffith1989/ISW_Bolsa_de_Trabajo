<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="<?php echo base_url('css/administrador.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/desplegar_adm.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/usuario.css') ?>">
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
                <p>
                <?php 
                        echo '<br>_______Datos de Inicio____________________________________________________________________________________
                        <br><br>';
                        echo 'Id: '.$query-> Id_Empleador.'<br/><br/>';
                        echo 'Usuario: '.$query-> Usuario.'<br/><br/>';
                        echo '<br>_______Datos Personales____________________________________________________________________________________
                        <br><br>';
                        echo 'Primer Nombre: '.$query->Nombre1.'<br/><br/>';
                        echo 'Segundo Nombre: '.$query->Nombre2.'<br/><br/>';
                        echo 'Primer Apellido: '.$query->Apellido1.'<br/><br/>';
                        echo 'Segundo Apellido: '.$query->Apellido2.'<br/><br/>';
                        echo 'Género: ';
                        if($query-> Sexo == TRUE) {
                            echo 'Masculino'.'<br/><br/>';
                        }
                        else {
                            echo 'Femenino'.'<br/><br/>';
                        }
                        echo 'Empresa: '.$query->Empresa.'<br/><br/>';
                        echo '<br>_______Datos de Ubicacion____________________________________________________________________________________
                        <br><br>';
                        echo 'Primer Telefono: '.$query-> Telefono1.'<br/><br/>';
                        echo 'Segundo Telefono: '.$query-> Telefono2.'<br/><br/>';
                        echo 'E-Mail: '.$query-> Correo.'<br/><br/>';
                        echo '<br>_______Datos de la Cuenta____________________________________________________________________________________
                        <br><br>';
                        echo 'Fecha de Solicitud: '.$query-> Fecha_Solicitud.'<br/><br/>';
                        if($query-> Verificar == TRUE) {
                            echo 'Verificación: Si'.'<br/><br/>';
                            echo 'Id Administrador Verificador: '.$query-> Id_Administrador.'<br/><br/>';
                            
                        }
                        else {
                            echo 'Verificación: No'.'<br/><br/>';
                        }
                    ?>
                </p>
                
                
            </div>
        </section>
    </div>
</body>
</html>

