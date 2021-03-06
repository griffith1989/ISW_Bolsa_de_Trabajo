<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="<?php echo base_url('css/administrador.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/desplegar_adm.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/usuario.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/foro.css') ?>">
</head>
<body>
    <div>
        <header>
            <hgroup>
                <h1> UTEM Bolsa de Trabajo </h1><br>
            </hgroup>
            <div id="header">
                        <ul class ="nav">
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/empleador_inicio')?>">Inicio</a></li>
                            
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/empleador_ver')?>">Ver</a></li>
                            
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/empleador_trabajos')?>">Trabajo</a></li>
                            
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/empleador_foro')?>">Foro</a></li>
                        </ul>
                    </div>
            
        </header>
        <br><br><br><br>
        <div id="usuario">
            <a href="<?php echo base_url('index.php/proyecto_isw/ver_perfil_empleador')?>"> <?php echo $this->session->userdata('usuario')?> </a>    
            <a href="<?php echo base_url('index.php/proyecto_isw/salir')?>"> Salir </a>
        </div>
        <br>
        <section>
            <div id="texto_adm">
                    <h1>Foro</h1>
                    
                    <?php echo validation_errors();?>
                    <?= form_open(base_url('index.php/proyecto_isw/empleador_resultado_foro')) ?>
                    <?php
                        $titulo = array(
                            'name' => 'titulo'
                        );
                        $comentario = array(
                            'name' => 'comentario'
                        )
                    ?>
                    <?= form_label('Titulo','titulo')?>
                    <?= form_input($titulo)?><br><br>
                    <?= form_label('Comentario','comentario')?><br>
                    <?= form_textarea($comentario)?><br><br>
                    <?= form_submit('Aceptar','Aceptar')?>
                    <?= form_close()?>
                    
                    <br>
                    <?php foreach ($query as $query){?>
                    <div id="foro">
                        <div id="datos">
                            <h4>Usuario : <?php echo $query->Usuario ?></h4>
                            <h5><?php echo $query->Permiso_Usuario ?></h5>
                            <h6><?php echo $query->Fecha_Posteo ?></h6>
                        </div>
                        <div id="comentario">
                            <h2><?php echo $query->Titulo ?></h2>
                            <h4><?php echo $query->Mensaje ?></h4>
                        </div>
                    </div>
                    <br>
                    <?php } ?>
            </div>
        </section>
    </div>
</body>
</html>



