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
                <h1>Inicio</h1>
                <p>
                </p>
            </div>
        </section>
    </div>
</body>
</html>


