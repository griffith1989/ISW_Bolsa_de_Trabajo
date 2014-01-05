<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/administrador.css">
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/desplegar_adm.css">
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/usuario.css">
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/green/style.css">
    <script src="<?php echo base_url(js/jquery.tablesorter.js)?>"></script>
    <script src="<?php echo base_url(js/jquery.js)?>"></script>
    <script tsrc="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
    <div>
        <header>
            <hgroup>
                <h1> UTEM Bolsa de Trabajo </h1><br>
            </hgroup>
                    <div id="header">
                        <ul class ="nav">
                            <li><a href = "<?php echo base_url()?>proyecto_isw/empleador_inicio">Inicio</a></li>
                            
                            <li><a href = "<?php echo base_url()?>proyecto_isw/empleador_trabajos">Trabajo</a></li>
                            
                            <li><a href = "<?php echo base_url()?>proyecto_isw/alumno_foro">Foro</a></li>
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
                    <h1>Trabajos</h1>
                    
                    <?php echo validation_errors();?>
                    <?= form_open(base_url()."proyecto_isw/empleador_trabajo") ?>
                    <?php
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
                        $especificacion = array (
                            'name' => 'descripcion'
                        );
                    ?>
                    <?= form_label('Carrera','codigo_carrera')?>
                    <?= form_dropdown($codigo_carrera,$opciones_carrera)?><br>
                    <?= form_label('Descripcion','descripcion')?><br>
                    <?= form_textarea($especificacion)?><br>
                    <?= form_submit('aceptar','aceptar')?>
                <?= form_close()?>
                    <?php
                    
                    
                        $encabezado = '
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Carrera</th>
                                    <th>Descripcion</th>
                                    <th>Fecha solicitud</th>
                                </tr>
                            </thead>
                            ';
                        $detalle = '<tbody>';
                        foreach ($query as $query) {
                            if($query->Id_Empleador == ''){
                                $usuario = $query->Id_Administrador;
                            }
                            else{
                                $usuario = $query->Id_Empleador;
                            }
                        $detalle .= '
                            <tbody>
                                <tr>
                                    <td>'.$query->Usuario.'</td>
                                    <td>'.$query->Codigo_Carrera.'</td>
                                    <td>'.$query->Descripcion.'</td>
                                    <td>'.$query->Fecha_Posteo.'</td>
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
