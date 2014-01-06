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
                    <h1>Modificar Alumno</h1>
                    
                    <?php echo validation_errors();?>
                    <?= form_open(base_url('index.php/administrador_modificar/modificar_alumno')) ?>
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
                        'Placeholder' => 'Nueva Contraseña'
                        
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
                    $comuna = array(
                        'name' => 'comuna',
                        'Placeholder' => 'Comuna',
                        'value' => $query->Comuna
                    );
                    $direccion = array(
                        'name' => 'direccion',
                        'Placeholder' => 'Direccion',
                        'value' => $query->Direccion
                    );
                    $fecha = array(
                        'name' => 'fecha',
                        'Placeholder' => 'Fecha de Nacimiento',
                        'value' => $query->Fecha_Nacimiento
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
                   $rut = array(
                        'name' => 'rut',
                        'Placeholder' => 'Rut',
                        'value' => $query->Rut
                    );
                   $anio_ingreso = array(
                         'name' => 'anio_ingreso',
                         'Placeholder' => 'Año de Ingreso',
                        'value' => $query->Anio_Ingreso
                    );
                    $codigo_carrera = 'codigo_carrera';
                    $opciones_carrera = array(
                        3021 => ' (3021)  Contador Público y Auditor',
                        3190 => ' (3190)  Técnico de Nivel Superior en Gestión Pública Mención en Gestión Municipal',
                        3210 => ' (3210)  Construcción Civil',
                        3630 => ' (3630)  Dibujante Proyectista',
                        3640 => ' (3640)  Ingeniería de Ejecución en Informática',
                        3813 => ' (3813)  Técnico de Nivel Superior en Análisis Fisicoquímico',
                        3814 => ' (3814)  Ingeniería de Ejecución en Química',
                        3820 => ' (3820)  Ingeniería de Ejecución en Biotecnología',
                        3821 => ' (3821)  Técnico de Nivel Superior en Aseguramiento de la Calidad e Inocuidad de los Alimentos',
                        3822 => ' (3822)  Ingeniería de Ejecución en Industria Alimentaria',
                        4031 => ' (4031)  Ingeniería de Ejecución en Comercio Internacional [PROSECUCIÓN]',
                        4052 => ' (4052)  Ingeniería Civil Industrial [PROSECUCIÓN]',
                        4053 => ' (4053)  Ingeniería Comercial [PROSECUCIÓN]',
                        4054 => ' (4054)  Ingeniería Civil en Obras Civiles [PROSECUCIÓN]',
                        4055 => ' (4055)  Ingeniería Civil en Prevención de Riesgos y Medio Ambiente [PROSECUCIÓN]',
                        21002 => '(21002) Bibliotecología y Documentación',
                        21012 => '(21012) Contador Público y Auditor',
                        21015 => '(21015) Ingeniería en Administración Agroindustrial',
                        21023 => '(21023) Diseño Industrial',
                        21024 => '(21024) Diseño en Comunicación Visual',
                        21025 => '(21025) Ingeniería en Transporte y Tránsito',
                        21030 => '(21030) Ingeniería en Informática',
                        21031 => '(21031) Ingeniería en Geomensura',
                        21032 => '(21032) Ingeniería en Construcción',
                        21037 => '(21037) Ingeniería en Mecánica',
                        21039 => '(21039) Ingeniería en Industria Alimentaria',
                        21041 => '(21041) Ingeniería Civil en Computación mención Informática',
                        21043 => '(21043) Trabajo Social',
                        21045 => '(21045) Ingeniería Industrial',
                        21046 => '(21046) Bachillerato en Ciencias de la Ingeniería',
                        21047 => '(21047) Arquitectura',
                        21048 => '(21048) Ingeniería Comercial',
                        21071 => '(21071) Dibujante Proyectista',
                        21073 => '(21073) Ingeniería en Biotecnología',
                        21074 => '(21074) Ingeniería Civil en Obras Civiles',
                        21075 => '(21075) Ingeniería Civil Electrónica',
                        21076 => '(21076) Ingeniería Civil Industrial',
                        21080 => '(21080) Ingeniería Química',
                        21081 => '(21081) Ingeniería en Comercio Internacional',
                        21082 => '(21082) Ingeniería en Gestión Turística',
                        21083 => '(21083) Química Industrial',
                        21087 => '(21087) Ingeniería Civil en Prevención de Riesgos y Medioambiente',
                        21088 => '(21088) Cartografía y Geomática'
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
                    <?= form_hidden('usuario_referencia',$query->Usuario)?>
                    <?= form_hidden('pass_antiguo',$query->Contrasenia)?>
                    <?= form_label('Usuario','usuario')?>
                    <?= form_input($usuario)?><br><br>
                    <?= form_label('Nueva Contrasenia','pass')?>
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
                    <?= form_label('Rut','rut')?>
                    <?= form_input($rut)?><br><br>
                    <?= form_label('Fecha de Nacimiento','fecha')?>
                    <?= form_input($fecha)?><br><br>
                    <?= form_label('Género','sexo')?>
                    <?= form_dropdown($sexo,$opciones)?><br><br>
                    <?= form_label('Año de Ingreso','anio_ingreso')?>
                    <?= form_input($anio_ingreso)?><br><br>
                    <?= form_label('Carrera','codigo_carrera')?>
                    <?= form_dropdown($codigo_carrera,$opciones_carrera)?><br><br>
                    <br>_______Datos de Ubicación____________________________________________________________________________________
                    <br><br>
                    <?= form_label('Primer Telefono','telefono1')?>
                    <?= form_input($telefono1)?><br><br>
                    <?= form_label('Segundo Telefono','telefono2')?>
                    <?= form_input($telefono2)?><br><br>
                    <?= form_label('E-Mail','correo')?>
                    <?= form_input($correo)?><br><br>
                    <?= form_label('Comuna','comuna')?>
                    <?= form_input($comuna)?><br><br>
                    <?= form_label('Direccion','direccion')?>
                    <?= form_input($direccion)?><br><br>
                    <?= form_submit('login_entrar','Aceptar')?>
                <?= form_close()?>
            </div>
        </section>
    </div>

