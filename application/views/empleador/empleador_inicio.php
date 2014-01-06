<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/administrador.css">
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/desplegar_alu.css">
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/usuario.css">
</head>
<body>
    <div id="encabezado">
        <header>
            <hgroup>
                <h1> UTEM Bolsa de Trabajo </h1><br>
            </hgroup>
            
                    <div id="header">
                        <ul class ="nav">
                            <li><a href = "<?php echo base_url()?>proyecto_isw/empleador_inicio">Inicio</a></li>
                            
                            <li><a href = "<?php echo base_url()?>proyecto_isw/empleador_trabajos">Trabajo</a></li>
                            
                            <li><a href = "<?php echo base_url()?>proyecto_isw/empleador_foro">Foro</a></li>
                        </ul>
                    </div>
            
        </header>
        <br><br><br><br>
        <div id="usuario">
            <a href="<?php echo base_url()?>proyecto_isw/ver_perfil_alumno"> <?php echo $this->session->userdata('usuario')?> </a>    
            <a href="<?php echo base_url()?>proyecto_isw/salir"> Salir </a>
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


