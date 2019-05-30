<?php
/**
 * Fichero vMiCuenta.php
 * Este fichero permite visualizar la página para editar la cuenta
 * @author Laura Fernandez
 * @modifiedDate 28/01/2019
 * @version 1.5
 */
?>


<nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">AJAX</a>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="submit" name="Cancelar" value="Volver" class="btn btn-danger">

            </div>
            </nav>

        </form>

        <!-- Header -->
        <header class="masthead bg-primary text-white text-center">
            <div id="login">

                <div class="container">
                    <div id="login-row" class="row justify-content-center align-items-center">
                        <div id="login-column" class="col-md-6">
                            <div id="login-box" class="col-md-12">
                                <button class="btn btn-success" onclick="showDialog()">¿Que hace Ajax?</button>
                                <button class="btn btn-success" onclick="closeDialog()">Cerrar Info</button>
                                <dialog id="myDialog">Ajax saca la informacion de un fichero json que tenemos en el servidor es de comunicacion asincrona
                                y nos ayuda para actualizar informaciones desde un fichero Json</dialog>
                                <button class="btn btn-success" onclick="ajax_get_json()">Mostrar Datos Con Ajax</button>
                                <div id="info"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>


        <script>

            var resultado = document.getElementById("info")
            var x = document.getElementById("myDialog");

            function showDialog() {
                x.show();
            }

            function closeDialog() {
                x.close();
            }



            function ajax_get_json() { // creamos una funcion para llamar al json
                var xmlhttp; // creamos una variable

                if (window.XMLHttpRequest) { //verificamos el tipo de navegador
                    xmlhttp = new XMLHttpRequest();
                } else { // en caso de navegadores antiguos
                    xmlhttp = new ActiveXObject(Microsoft.xmlhttp);
                }

                xmlhttp.onreadystatechange = function () { // funcion anonima
                    if (xmlhttp.readyState === 4 && xmlhttp.status === 200) { // si la peticion a sido realizada y exitosa hacer lo siguiente
                        var datos = JSON.parse(xmlhttp.responseText);
                        if (resultado.innerHTML === "") { // si esta vacio resultado escrtibir si no no porque lo repite
                            for (var i in datos) { // sacamos los datos del json
                                resultado.innerHTML += i + ": " + datos[i] + "<br />"; // concatenamos con el valor de cada propiedad i y con mas...
                            }
                        }
                    }
                }
                xmlhttp.open("GET", "webroot/js/datos.json", true); // // metodo con 3 parametros 1 tipo de metodo 
                //get porque obtenemos informacion 
                //2 donde esta en json
                //3 true una peticion asincrona
                xmlhttp.send();

            }
        </script>

