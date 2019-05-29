<?php
/**
 * Fichero vMiCuenta.php
 * Este fichero permite visualizar la página para editar la cuenta
 * @author Laura Fernandez
 * @modifiedDate 28/01/2019
 * @version 1.5
 */
?>
<script>
    function crearPagina() {

        //Primer formulario

        var a1 = document.createElement("form");
        a1.setAttribute("method", "get");
        a1.setAttribute("name", "primero");
        document.body.appendChild(a1);

        var b1 = document.createElement("label");
        var textob1 = document.createTextNode("Pie de pagina con DOM: ");
        b1.appendChild(textob1);
        document.primero.appendChild(b1);

       
    }
</script>

    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Viajes</a>

            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" name="Cancelar" value="Volver" class="btn btn-danger">

                </div>
                </nav>

<body onload="crearPagina()">
    
</body>

                <!-- Header -->
                <header class="masthead bg-primary text-white text-center">

                    <div id="login">

                        <div class="container">
                            <div id="login-row" class="row justify-content-center align-items-center">
                                <div id="login-column" class="col-md-6">
                                    <div id="login-box" class="col-md-12">
                                        <div>
                                            <h2>Integrantes:</h2>
                                            <form><ul id="li-integrantes"></ul>
                                            </form>
                                        </div>
                                        <div>
                                            <h2>Registro</h2>
                                            <form>
                                                <label for="txt-id">Id Es automattico</label>
                                                <input id="txt-id" type="text" readonly/><br />
                                                <label for="txt-nombres">Lugar del Viaje</label>
                                                <input id="txt-nombres" type="text"/><br />
                                                <label for="txt-apellidos">Nombre del hotel de preferencia</label>
                                                <input id="txt-apellidos" type="text"/><br />
                                                <button id="btn-guardar" type="button">Guardar</button>
                                                <button type="reset">Limpiar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
           
            </form>










