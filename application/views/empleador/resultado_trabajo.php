<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="<?php echo base_url('css/administrador.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/desplegar_adm.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/usuario.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('css/green/style.css') ?>">
    <script src="<?php echo base_url('js/jquery.tablesorter.js'); ?>"></script>
    <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
    <script tsrc="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
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
                <h1>Postulantes al Trabajo</h1>
            
            
            
            <?php
                    
                    
                        $encabezado = '
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                </tr>
                            </thead>
                            ';
                        $detalle = '<tbody>';
                        foreach ($query as $query) {
                        $detalle .= '
                            <tbody>
                                <tr>
                                    <td>'.$query->Usuario.'</td>
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




