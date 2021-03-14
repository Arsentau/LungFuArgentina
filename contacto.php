<?php

if(isset($_POST['submit'])) {
    
    $from = "info@lungfu.com.ar";
    $fromName = "Lung Fu Argentina"; 
    $to = "info@lungfu.com.ar"; 
    $subject = $_POST['validarAsunto']; 

 
    $fullMessage = "Hola! " . $to . "\r\n";
    $fullMessage .= $_POST['validarNombre'] . " " . $_POST['validarApellidos'] . " te ha enviado un mensaje:\r\n";
    $fullMessage .= "\r\n";
    $fullMessage .= "Nombre: " . $_POST['validarNombre'] . "\r\n";
    $fullMessage .= "Apellidos: " . $_POST['validarApellidos'] . "\r\n";
    $fullMessage .= "E-Mail: " . $_POST['validarEmail'] . "\r\n";
    $fullMessage .= "Teléfono: " . $_POST['validarTelefono'] . "\r\n";
    $fullMessage .= "Asunto: " . $_POST['validarAsunto'] . "\r\n";
    $fullMessage .= "Mensaje: " . $_POST['validationMensaje'] . "\r\n";
    $fullMessage .= "\r\n";
    $fullMessage .= "Saludos!\r\n";

   
    $headers = "Organization: Lung Fu Argentina\r\n";
    $headers .= "From: " . $fromName . "<" . $from . ">\r\n";
    $headers .= "Reply-To: " . $_POST['validarEmail'] . "\r\n";
    $headers .= "Return-Path: " . $to . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "X-Priority: 3\r\n";
    $headers .= "X-Mailer: PHP". phpversion() ."\r\n";

    
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "<center><h2>El E-Mail se ha enviado correctamente!</h2></center>";
    } else {
        echo "<center><h2>Ops ! El E-Mail ha fallado!</h2></center>S";
    }
}
?>


<html lang="es">
<head>
    <title>Kung Fu Mendoza - Lung Fu Argentina - Artes marciales</title>
    <meta content="Escuela de Kung Fu Lung Fu es referencia de las Artes Marciales Chinas (Kung Fu)" name="description">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://www.lungfu.com.br/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <link href="http://www.lungfu.com.br/favicon.ico" rel="icon" type="image/x-icon">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
</head>

<body>
    <div class="loader">
    </div>

 
        <nav class="navbar navbar-expand-md navbar-dark mt-0 black">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul id="links" class="navbar-nav h4 align-items-center navbar-right ml-auto mr-auto">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/#actividades">Actividades</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/#about">¿Quiénes Somos?</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/#masters">Maestros</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/#estilo">Estilo</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/#kids">Niños</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/#faqs">Preg. Frecuentes</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/#cdprueba">Clase de Prueba</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/#ubicacion">Sede</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/#instructores">Instructores</a></li>
                    

                    </ul>
                </div>
                <a class="navbar-brand align-content-align-items-baseline" href="tel:+5492613667272" target="_blank">
                    <img id="logo_navbar0" src="./css/img/telefono.png" alt="logo">
                </a>
                <a class="navbar-brand align-content-align-items-baseline" href="http://wa.me/542613667272" target="_blank">
                    <img id="logo_navbar" src="./css/img/whats.png" alt="logo">
                </a>
                <a class="navbar-brand align-content-align-items-baseline" href="https://www.facebook.com/lungfuargentina" target="_blank">
                    <img id="logo_navbar1" src="./css/img/facebook-white.png" alt="logo">
                </a>
                <a class="navbar-brand align-content-align-items-baseline" href="https://www.instagram.com/lungfuargentina" target="_blank">
                    <img id="logo_navbar2" src="./css/img/instagram.png" alt="logo">
                </a>
            </div>

        </nav>
    



    <div class="container-fluid p-3  contact">
        <div class="row text-white">
            <h2><b>Contacto</b></h2>
        </div>
        <div class="row text-warning contacto">
            <div class="col-md-3">
                <p> </p>
            </div>
            <div class="col-md-6">
                <form method="POST" action="/contacto.php" class="needs-validation" novalidate>

                    <div class="form-row mt-1">
                        <div class="mb-3">
                            <label for="validarNombre">Nombre:<span class="red">*</span></label>
                            <input type="text" class="form-control" id="validarNombre" name="validarNombre" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="mb-3">
                            <label for="validarApellidos">Apellidos:<span class="red">*</span></label>
                            <input type="text" class="form-control" id="validarApellidos" name="validarApellidos" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="mb-3">
                            <label for="validarEmail">E-mail:<span class="red">*</span></label>
                            <input type="email" class="form-control" id="validarEmail" name="validarEmail" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="mb-3">
                            <label for="validarTelefono">Teléfono:<span class="red">*</span></label>
                            <input type="number" class="form-control" id="validarTelefono" name="validarTelefono" max="99999999999" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="mb-3">
                            <label for="validarAsunto">Asunto:</label>
                            <input type="text" class="form-control" id="validarAsunto" name="validarAsunto" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="mb-3">
                            <label for="validationMensaje">Mensaje:<span class="red">*</span></label>
                            <textarea class="form-control" id="validationMensaje" name="validationMensaje" rows="3" min="25" required></textarea>
                        </div>
                    </div>

                    <div class="form-group mb-10">
                        <button class="btn btn-success p-2 pl-5 pr-5" type="submit" name="submit">Enviar</button>
                        <button class="btn btn-danger" type="reset" name="reset">Limpiar</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-3">
            <p> </p>
        </div>
    </div>
    <footer>
        <div class="container-fuid">
            <div class="row text-warning pt-4 p-0">
                <div class="col-md-5">
                    <h4><strong>Develop</strong> diseño y desarrollo web.</h4>
                </div>
                <div class="col-md-6 mt-auto">
                    <a class="text-white h5" href="http://wa.me/542612151020" target="_blank">
                        <h5>Contacto 2615595042</h5>
                    </a>
                </div>

            </div>
        </div>
    </footer>   
    <script>
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script type="text/javascript">
        $(window).load(function() {
            $(".loader").fadeOut("slow");
        });
    </script>
</body>
</html>

