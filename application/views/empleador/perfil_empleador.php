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
                            
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/empleador_trabajos')?>">Trabajo</a></li>
                            
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/empleador_foro')?>">Foro</a></li>
                        </ul>
                    </div>
            
        </header>
        <br><br><br><br>
        <div id="usuario">
            <a href="<?php echo base_url('index.php/proyecto_isw/ver_perfil_alumno')?>"> <?php echo $this->session->userdata('usuario')?> </a>    
            <a href="<?php echo base_url('index.php/proyecto_isw/salir')?>"> Salir </a>
        </div>
        <br>
        <section>
            <div id="texto_adm">
                <h1>Perfil Alumno</h1>
                <p>
                <?php 
                        echo '<br>_______Datos de Inicio____________________________________________________________________________________
                        <br><br>';
                        echo 'Id: '.$query-> Id_Alumno.'<br/><br/>';
                        echo 'Usuario: '.$query-> Usuario.'<br/><br/>';
                        echo 'Rut: '.$query-> Rut.'<br/><br/>';
                        echo '<br>_______Datos de Personales____________________________________________________________________________________
                        <br><br>';
                        echo 'Primer Nombre: '.$query->Nombre1.'<br/><br>';
                        echo 'Segundo Nombre: '.$query->Nombre2.'<br/><br>';
                        echo 'Primer Apellido: '.$query->Apellido1.'<br/><br>';
                        echo 'Segundo Apellido: '.$query->Apellido2.'<br/><br>';
                        echo 'Género: ';
                        if($query-> Sexo == TRUE) {
                            echo 'Masculino'.'<br/><br>';
                        }
                        else {
                            echo 'Femenino'.'<br/><br>';
                        }
                        echo 'Fecha de Nacimiento: '.$query-> Fecha_Nacimiento.'<br/><br>';
                        echo 'Año de Ingreso: '.$query-> Anio_Ingreso.'<br/><br/>';
                        echo 'Codigo de la Carrera: '.$query-> Codigo_Carrera.'<br/><br/>';
                        echo '<br>_______Datos de Ubicación____________________________________________________________________________________
                        <br><br>';
                        echo 'Primer Telefono: '.$query-> Telefono1.'<br/><br/>';
                        echo 'Segundo Telefono: '.$query-> Telefono2.'<br/><br/>';
                        echo 'E-Mail: '.$query-> Correo.'<br/><br/>';
                        echo 'Comuna: '.$query-> Comuna.'<br/><br/>';
                        echo 'direccion: '.$query-> Direccion.'<br/><br/>';
                        echo '<br>_______Datos de la Cuenta____________________________________________________________________________________
                        <br><br>';
                        echo 'Fecha de Solicitud: '.$query-> Fecha_Solicitud.'<br/><br/>';
                        echo 'Curriculum: ';
                        if($query-> Curriculum == TRUE) {
                            echo 'Curriculum: Si'.'<br/><br/>';
                        }
                        else {
                            echo 'Curriculum: No'.'<br/><br/>';
                        }
                        if($query-> Verificar == TRUE) {
                            echo 'Verificación: Si'.'<br/><br/>';
                            echo 'Id Administrador Verificador: '.$query-> Id_Administrador.'<br/><br/>';
                        }
                        else {
                            echo 'Verificación: No'.'<br/><br/>';
                        }
                    ?>
                    <?= form_open(base_url('index.php/administrador_modificar/modificar_alumno'))?>
                    <?= form_submit('Modificar','Modificar')?>
                    <?= form_close()?>
                </p>
                
                
            </div>
        </section>
    </div>
</body>
</html>

