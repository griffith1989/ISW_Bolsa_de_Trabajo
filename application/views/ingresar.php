<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/style.css">
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/desplegar.css">
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="http://localhost/ISW_Bolsa_de_Trabajo/js/script_inicio.js"></script>
</head>
<body>
    <div id="Encabezado">
        <header>
            <hgroup>
                <h1> UTEM Bolsa de Trabajo </h1><br>
            </hgroup>
            <div id="header">
                        <ul class ="nav">
                            <li><a href = "<?php echo base_url()?>proyecto_isw/ver_inicio">Inicio</a></li>

                            <li><a href = "<?php echo base_url()?>proyecto_isw/ver_ingresar">Ingresar</a></li>

                            <li><a href = "<?php echo base_url()?>proyecto_isw/ver_foro">Foro</a></li>
                        </ul>
                    </div>
        </header>
        <br><br><br><br><br>
        <section>
            <div id="texto">
                <hgroup>
                    <h1>Ingresar</h1>
                </hgroup>
                <?php If ($this->session->flashdata('ControllerMesage') != '') { 
                    echo $this->session->flashdata('ControllerMesage');
                }
?>
                <?php echo validation_errors(); ?>
                <?= form_open(base_url()."proyecto_isw/validar_ingreso")?>
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
                
                <?php
                    if ( $this->session->flashdata('item') != '' )
                    {
                            ?>
                    <p style="color: red;">
                            <?php echo $this->session->flashdata('item'); ?>
                    </p>
                    
                    <?php } ?>
                    <br><br>
                    <?= form_label('Usuario','Usuario')?>
                    <?= form_input($usuario)?><br>
                    <?= form_label('Contrasenia','Contrasenia')?>
                    <?= form_password($contrasenia)?><br>
                    <?= form_label('Permiso','Permiso')?>
                    <?= form_dropdown($permiso,$opciones)?><br><br>
                    <?= form_submit('login_entrar','Ingresar')?>
                <?= form_close()?>
            </div>
        </section>
    </div>
</body>
</html>
