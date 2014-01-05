<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset = "UTF-8" />
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/style.css">
    <link rel="stylesheet" href="http://localhost/ISW_Bolsa_de_Trabajo/css/desplegar.css">
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="http://localhost/ISW_Bolsa_de_Trabajo/js/script_inicio.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
</head>
<body>
    <div id="encabezado">
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
                <article>
                    <h1>Inicio</h1>
                    <p>
                        Esta es una pagina con el fin de facilitar la busqueda de
                        un trabajo para los alumnos de la Universidad Tecnologica Metropolitana.
                        <?php echo($this->ws_dirdoc->autenticar('17312069','4e0a641fdb5a1d411da2c920476a9c73c61b88faf520d954677510da61db28a2'));?>
                    </p>
                </article>
                <aside>
                    <p>Para mayor informacion visitanos en <a href="http://www.utem.cl/" id="pag_utem">nuestra pagina inicial</a></p>
                </aside>
            </div>
        </section>
    </div>
</body>
</html>