<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/desplegar.css') ?>">
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
                <?php echo validation_errors(); ?>
                <?= form_open(base_url('index.php/proyecto_isw/validar_dirdoc'))?>
                <?php
                    $rut = array(
                        'name' => 'rut'
                    );
                    $contrasenia = array(
                        'name' => 'pass'
                    );
                ?>
                
                    <br><br>
                    <?= form_label('Rut','rut')?>
                    <?= form_input($rut)?><br>
                    <?= form_label('Contrasenia','pass')?>
                    <?= form_password($contrasenia)?><br>
                    <?= form_submit('login_entrar','Ingresar')?>
                <?= form_close()?>
            </div>
        </section>
    </div>
</body>
</html>


