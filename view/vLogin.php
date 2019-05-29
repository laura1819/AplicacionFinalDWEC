<?php
/**
 * Fichero vLogin.php
 * Este fichero permite visualizar la página de login
 * @author Laura Fernandez
 * @modifiedDate 28/01/2019
 * @version 1.5
 */
?>

<style>
    #reproductor{
        width:400px ;
        height: 290px;
        background:linear-gradient(10deg, green, gold);

        

    }
</style>
<!-- Navigation -->
<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Iniciar Sesion</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Modelos</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Reloj Calendario</a>
                </li>
                <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Tecnologias</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
        <div id="login">
            <h3 class="text-center text-white pt-10">Formulario login</h3>
            <div class="container">
                <div id="login-row" class="row justify-content-center align-items-center">
                    <div id="login-column" class="col-md-6">
                        <div id="login-box" class="col-md-12">
                            <form id="login-form" class="form" action="" method="post">
                                <div class="form-group">
                                    <label for="username" class="text-white">Nombre:</label><br>
                                    <input type="text" name="usuario" id="username" >

                                </div>
                                <?php
                                echo "<font color='#FF0000' size='2px'>$aErrores[usuario]</font>"; //Mostrará el mensaje de la variable en caso de que éste exista.
                                ?>
                                <div class="form-group">
                                    <label for="password" class="text-white">Contraseña:</label><br>
                                    <input type="password" name="pass" id="password" >

                                </div>
                                <?php
                                echo "<font color='#FF0000' size='2px'>$aErrores[pass]</font>"; //Mostrará el mensaje de la variable en caso de que éste exista.
                                ?>
                                <div class="form-group">
                                    <input type="submit" name="Acceder" class="btn btn-info btn-md" value="Acceder">
                                </div>
                                <div id="register-link" class="text-right">
                                    <p>¿Todavia sin cuenta? Registrate ya!</p>
                                    <input type="submit" name="Registrarse" class="btn btn-info btn-md" value="Registro">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


</form>

<!-- Portfolio Grid Section -->
<section class="portfolio" id="portfolio">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Modelos</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fas fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="webroot/img/portfolio/180503ArbolDeNavegacion.jpg" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fas fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="webroot/img/portfolio/180503CasosDeUso.jpg" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fas fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="webroot/img/portfolio/clases.png" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fas fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="webroot/img/portfolio/180503ModeloFisicoDeDatos.jpg" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">    
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fas fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="webroot/img/portfolio/estructuraficheros.PNG" alt="">
                </a>
            </div>
            <div class="col-md-6 col-lg-4">
                <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
                    <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                        <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                            <i class="fas fa-search-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="webroot/img/portfolio/180503RelacionDeFicheros.jpg" alt="">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="bg-primary text-white mb-0" id="about">
    <div class="container" >
        <h2 class="text-center text-uppercase text-white">Calendario y Reloj</h2>
        <hr class="star-light mb-5">
        <div class="row align-items-start">

            <div class="col-lg-4 ml-auto">
                <table id="calendar">
                    <caption></caption>
                    <thead>
                        <tr>
                            <th>Lun</th><th>Mar</th><th>Mie</th><th>Jue</th><th>Vie</th><th>Sab</th><th>Dom</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 mr-auto">
                <body onload="reloj()" >
                    <div class="contenedor">
                        <div id="medio"></div>
                        <div id="horas"></div>
                        <div id="minutos"></div>
                        <div id="uno"><span>1</span></div>
                        <div id="dos"><span>2</span></div>
                        <div id="tres"><span>3</span></div>
                        <div id="cuatro"><span>4</span></div>
                        <div id="cinco"><span>5</span></div>
                        <div id="seis"><span>6</span></div>
                        <div id="siete"><span>7</span></div>
                        <div id="ocho"><span>8</span></div>
                        <div id="nueve"><span>9</span></div>
                        <div id="diez"><span>10</span></div>
                        <div id="once"><span>11</span></div>
                        <div id="doce"><span>12</span></div>
                    </div>
                </body>
            </div>

        </div>
        <div style="visibility: hidden">
            <h1>fbnuewbn</h1>
            <p>nfewnf</p>
        </div>
        <div style="visibility: hidden">
            <h1>fbnuewbn</h1>
            <p>nfewnf</p>
        </div>
    </div>

</section>




<section class="bg-white text-white mb-0" id="contact">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Calculadora</h2>
        <hr class="star-dark mb-5">

        <div class="row">
            <div class="col-lg-12 ml-auto">

                <div class="container">
                    <div class="row">
                        <div class="col d-flex justify-content-center">
                            <br />

                            <div class="calculadora">
                                <input id="resultado" type="text" class="form-control resultado" placeholder="0" disabled="disabled" />

                                <div class="row">
                                    <button onclick="calcular('acao', 'c')" type="button" class="btn2 btn-dark btn-lg clear font-weight-light">C</button>
                                    <button onclick="calcular('acao', '/')" type="button" class="btn2 btn-dark btn-lg font-weight-light">/</button>
                                    <button onclick="calcular('acao', '*')" type="button" class="btn2 btn-dark btn-lg font-weight-light">x</button>
                                </div>

                                <div class="row">
                                    <button onclick="calcular('valor', 7)" type="button" class="btn2 btn-dark btn-lg font-weight-light">7</button>
                                    <button onclick="calcular('valor', 8)" type="button" class="btn2 btn-dark btn-lg font-weight-light">8</button>
                                    <button onclick="calcular('valor', 9)" type="button" class="btn2 btn-dark btn-lg font-weight-light">9</button>
                                    <button onclick="calcular('acao', '-')" type="button" class="btn2 btn-dark btn-lg font-weight-light">-</button>
                                </div>

                                <div class="row">
                                    <button onclick="calcular('valor', 4)" type="button" class="btn2 btn-dark btn-lg font-weight-light">4</button>
                                    <button onclick="calcular('valor', 5)" type="button" class="btn2 btn-dark btn-lg font-weight-light">5</button>
                                    <button onclick="calcular('valor', 6)" type="button" class="btn2 btn-dark btn-lg font-weight-light">6</button>
                                    <button onclick="calcular('acao', '+')" type="button" class="btn2 btn-dark btn-lg font-weight-light">+</button>
                                </div>

                                <div class="row">
                                    <button onclick="calcular('valor', 1)" type="button" class="btn2 btn-dark btn-lg font-weight-light">1</button>
                                    <button onclick="calcular('valor', 2)" type="button" class="btn2 btn-dark btn-lg font-weight-light">2</button>
                                    <button onclick="calcular('valor', 3)" type="button" class="btn2 btn-dark btn-lg font-weight-light">3</button>
                                    <button onclick="calcular('acao', '=')" type="button" class="btn2 btn-dark btn-lg enter">=</button>
                                </div>

                                <div class="row" style="margin-top: -60px">
                                    <button onclick="calcular('valor', 0)" type="button" class="btn2 btn-dark zero btn-lg font-weight-light">0</button>
                                    <button onclick="calcular('acao', .)" type="button" class="btn2 btn-dark btn-lg font-weight-light">.</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>    

            </div>
        </div>


    </div>
</section>







<section class="bg-info text-white mb-0" id="contact">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Reproductor</h2>
        <hr class="star-dark mb-5">

        <div class="row">
            <div class="col-lg-8 ml-auto">

                <div id="reproductor">

                    <img src="webroot/img/play.PNG" alt="play" id="play" />
                    <img src="webroot/img/pause.PNG" alt="pause" id="pause" />
                    <img src="webroot/img/stop.png" alt="stop" id="stop" />
                    <p><img src="webroot/img/volmenos.PNG"/>  <input type="range" id="volume" step=".1" min="0" max="1" value="1"> <img src="webroot/img/volmas.PNG"/></p>
                    <p> <img src="webroot/img/tiempo.png"/><input type="range" id="time" step=".1" min="0" max="0" value="0"></p>

                </div>

                <audio id="audio">
                    <source src="webroot/img/drama.mp3" type="audio/mpeg">
                    Tu navegador no es compatible
                </audio>

            </div>
        </div>


    </div>
</section>
















<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Tecnologias Utilizadas</h2>
        <hr class="star-dark mb-5">
        <section id="slideshow">
            <div class="entire-content">
                <div class="content-carrousel">
                    <figure class="shadow"><img src="webroot/img/csshtml.jpg"/></figure>
                    <figure class="shadow"><img src="webroot/img/js.png"/></figure>
                    <figure class="shadow"><img src="webroot/img/php.png"/></figure>
                    <figure class="shadow"><img src="webroot/img/xml.png"/></figure>
                    <figure class="shadow"><img src="webroot/img/netbe.jpg"/></figure>
                    <figure class="shadow"><img src="webroot/img/sublime.png"/></figure>
                    <figure class="shadow"><img src="webroot/img/visual.png"/></figure>
                    <figure class="shadow"><img src="webroot/img/mysql.jpg"/></figure>
                    <figure class="shadow"><img src="webroot/img/file.jpg"/></figure>
                </div>
            </div>
        </section>

        <div class="tecno">

            <p><b><u>Tecnologias Utilizadas:</u></b><br>  <a href="https://www.w3.org/Style/Examples/011/firstcss.es.html">HTML y CSS,</a>
                <a href="https://www.javascript.com/">Javascript,</a>
                <a href="http://php.net/manual/es/intro-whatis.php">PHP,</a>
                <a href="https://es.wikipedia.org/wiki/Extensible_Markup_Language">XML</figure></a>					
            </p>

            <p><b><u>Herramientas Utilizadas:</u></b> <br>
                <a href="https://netbeans.org/">NetBeans,</a>
                <a href="https://www.sublimetext.com/">Sublime Text,</a>
                <a href="https://www.visual-paradigm.com/">Visual Paradigm,</a>
                <a href="https://www.mysql.com/">MySQL,</a>
                <a href="https://filezilla-project.org/">Filezilla</a></p>
            <p><b><u><a href="doc/070319EjerciciosTema1LauraFernandez.pdf" target="_blank">Ejercicios Tema 1</a></u></b></p>
            <p><b><u><a href="doc/29012019DocumentacionMaquinas.pdf" target="_blank">Documentacion Maquinas</a></u></b></p>		
				<p><b><u><a href="doc/documentacion.pdf" target="_blank">Documentacion DWEC</a></u></b></p>	


        </div>			
    </div>
</section>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>

<!-- Portfolio Modals -->

<!-- Portfolio Modal 1 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Arbol de navegacion</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="webroot/img/portfolio/180503ArbolDeNavegacion.jpg" alt="">                  
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 2 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Casos de uso</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="webroot/img/portfolio/180503CasosDeUso.jpg" alt="">                    
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 3 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Diagrama de clases</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="webroot/img/portfolio/clases.png" alt="">                   
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 4 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Modelo fisico de datos</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="webroot/img/portfolio/180503ModeloFisicoDeDatos.jpg" alt="">                   
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Portfolio Modal 5 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Estructura de directorios</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="webroot/img/portfolio/estructuraficheros.PNG" alt="">                   
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Portfolio Modal 6 -->
<div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
    <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-secondary text-uppercase mb-0">Mapa web</h2>
                    <hr class="star-dark mb-5">
                    <img class="img-fluid mb-5" src="webroot/img/portfolio/180503RelacionDeFicheros.jpg" alt="">                   
                    <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                        <i class="fa fa-close"></i>
                        Close Project</a>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function reloj() {
        var r = new Date();
        hora = r.getHours();
        gradosHoras = hora * 30;
        minuto = r.getMinutes();
        gradosMinutos = minuto * 6;
        gradosHoras += minuto * 0.5;
        segundo = r.getSeconds();
        gradosSegundos = segundo * 6;
        document.getElementById("horas").style.transform = 'rotate(' + gradosHoras + 'deg)';
        document.getElementById("minutos").style.transform = 'rotate(' + gradosMinutos + 'deg)';
    }
</script>

<script>





    var actual = new Date();
    function mostrarCalendario(year, month)
    {
        var now = new Date(year, month - 1, 1);
        var last = new Date(year, month, 0);
        var primerDiaSemana = (now.getDay() == 0) ? 7 : now.getDay();
        var ultimoDiaMes = last.getDate();
        var dia = 0;
        var resultado = "<tr bgcolor='silver'>";
        var diaActual = 0;
        console.log(ultimoDiaMes);

        var last_cell = primerDiaSemana + ultimoDiaMes;

        // hacemos un bucle hasta 42, que es el máximo de valores que puede
        // haber... 6 columnas de 7 dias
        for (var i = 1; i <= 42; i++)
        {
            if (i == primerDiaSemana)
            {
                // determinamos en que dia empieza
                dia = 1;
            }
            if (i < primerDiaSemana || i >= last_cell)
            {
                // celda vacia
                resultado += "<td>&nbsp;</td>";
            } else {
                // mostramos el dia
                if (dia == actual.getDate() && month == actual.getMonth() + 1 && year == actual.getFullYear())
                    resultado += "<td class='hoy'>" + dia + "</td>";
                else
                    resultado += "<td>" + dia + "</td>";
                dia++;
            }
            if (i % 7 == 0)
            {
                if (dia > ultimoDiaMes)
                    break;
                resultado += "</tr><tr>\n";
            }
        }
        resultado += "</tr>";

        var meses = Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

        // Calculamos el siguiente mes y año
        nextMonth = month + 1;
        nextYear = year;
        if (month + 1 > 12)
        {
            nextMonth = 1;
            nextYear = year + 1;
        }

        // Calculamos el anterior mes y año
        prevMonth = month - 1;
        prevYear = year;
        if (month - 1 < 1)
        {
            prevMonth = 12;
            prevYear = year - 1;
        }

        document.getElementById("calendar").getElementsByTagName("caption")[0].innerHTML = "<div>" + meses[month - 1] + " / " + year + "</div><div><a onclick='mostrarCalendario(" + prevYear + "," + prevMonth + ")'>&lt;</a> <a onclick='mostrarCalendario(" + nextYear + "," + nextMonth + ")'>&gt;</a></div>";
        document.getElementById("calendar").getElementsByTagName("tbody")[0].innerHTML = resultado;
    }

    mostrarCalendario(actual.getFullYear(), actual.getMonth() + 1);


    function calcular(tipo, valor) {
        if (tipo === 'acao') {
            if (valor == 'c') {
                document.getElementById('resultado').value = ''
            }

            if (valor == '+' || valor == '-' || valor == '*' || valor == '/') {
                document.getElementById('resultado').value += valor
            }

            if (valor === '=') {
                var valor_campo = eval(document.getElementById('resultado').value)
                document.getElementById('resultado').value = valor_campo
            }

        } else if (tipo === 'valor') {
            document.getElementById('resultado').value += valor
        }
    }




</script>
