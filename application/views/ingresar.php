<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/desplegar.css') ?>">
</head>
<body>
    <div id="Encabezado">
        <header>
            <hgroup>
                <h1> UTEM Bolsa de Trabajo </h1><br>
            </hgroup>
            <div id="header">
                        <ul class ="nav">
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/ver_inicio')?>">Inicio</a></li>

                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/ver_ingresar')?>">Ingresar</a></li>
                        </ul>
                    </div>
        </header>
        <br><br><br><br><br>
        <section>
            <div id="texto">
                <hgroup>
                    <h1>Ingresar</h1>
                </hgroup>
                <?php echo validation_errors(); ?>
                <?= form_open(base_url('index.php/proyecto_isw/validar_ingreso'))?>
                <?php
                    $usuario = array(
                        'name' => 'Usuario'
                    );
                    $contrasenia = array(
                        'name' => 'Contrasenia'
                    );
                    $permiso = 'Permiso';
                    $opciones = array(
                        'Administrador' => 'Administrador',
                        'Empleador' => 'Empleador',
                        'Alumno' => 'Alumno'
                    );
                ?>
                
                    <br><br>
                    <?= form_label('Usuario','Usuario')?>
                    <?= form_input($usuario)?><br>
                    <?= form_label('Contrasenia','Contrasenia')?>
                    <?= form_password($contrasenia)?><br>
                    <?= form_label('Permiso','Permiso')?>
                    <?= form_dropdown($permiso,$opciones)?><br><br>
                    <?= form_submit('login_entrar','Ingresar')?>
                <?= form_close()?>
                    <br><br>
                    <a href="<?php echo base_url('index.php/proyecto_isw/crear_cuenta')?>">Crear Cuenta de Alumno</a>
                    <br>
            </div>
        </section>
    </div>
</body>
</html>
