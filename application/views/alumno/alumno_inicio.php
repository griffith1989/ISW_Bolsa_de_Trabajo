<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="<?php echo base_url('css/administrador.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/desplegar_adm.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/usuario.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/green/style.css') ?>">
    <script src="<?php echo base_url(js/jquery.tablesorter.js)?>"></script>
    <script src="<?php echo base_url(js/jquery.js)?>"></script>
</head>
<body>
    <div>
        <header>
            <hgroup>
                <h1> UTEM Bolsa de Trabajo </h1><br>
            </hgroup>
            <div id="header">
                        <ul class ="nav">
                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/alumno_inicio')?>">Inicio</a></li>

                            <li><a href = "<?php echo base_url('index.php/proyecto_isw/alumno_foro')?>">Foro</a></li>
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
                    <h1>Inicio</h1>
                    <?php echo validation_errors();?>
                    <?= form_open(base_url('index.php/proyecto_isw/agregar_trabajo')) ?>
                    <?php
                        $trabajo = array(
                            'name' => 'id_trabajo'
                        );
                    ?>
                    <?= form_label('Trabajo','id_trabajo')?><br>
                    <?= form_input($trabajo)?><br><br>
                    <?= form_submit('Aceptar','Aceptar')?>
                    <?= form_close()?>
                    
                    <br>
                    <?php
                        
                        $encabezado = '
                            <thead>
                                <tr>
                                    <th>Trabajo</th>
                                    <th>Usuario</th>
                                    <th>Descripcion</th>
                                    <th>Fecha Solicitud</th>
                                </tr>
                            </thead>
                            ';
                        $detalle = '<tbody>';
                        
                        foreach ($query as $query) {
                        $detalle .= '
                            <tbody>
                                <tr>
                                    <td>'.$query->Id_Trabajo.'</td>
                                    <td>'.$query->Usuario.'</td>
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

