<?php 
session_start();
include_once("CapaDato/conexion.php");
  if (isset($_SESSION['user'])) {
  header("location:bienvenido.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>OSLETCARE</title>
  <link rel="stylesheet" href="./Public/portafolio/css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" href="./Public/portafolio/css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="./Public/portafolio/css/responsive.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./Public/css/custom-bootstrap.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<?php
include_once("plantilla.html");
?> 
 <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        #modal-container {
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        #modal-container.active {
            opacity: 1;
            pointer-events: auto;
        }

        #modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 600px;
            width: 80%;
            text-align: justify;
        }

        #modal-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
    </style> -->
    
    <!-- <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        #content-container {
            max-height: 400px; /* Establece la altura máxima del contenedor */
        }

        h2 {
            color: #333;
        }

        p {
            text-align: justify;
        }
    </style>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        #modal-container {
            display: flex;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s ease;
        }

        #modal-container.active {
            opacity: 1;
            pointer-events: auto;
        }

        #modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            max-width: 80%;
            max-height: 80%;
            overflow-y: auto;
            text-align: justify;
            position: relative;
        }

        #modal-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        #accept-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        #accept-button:hover {
            background-color: #45a049;
        }
    </style> -->
</head>
<body>
<!-- Modal 2: Manual de Usuario -->
<div class="modal fade" id="manualModal" tabindex="-1" aria-labelledby="manualModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="manualModalLabel">Manual de Usuario</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h6><strong>Introducción al Software de Diagnóstico</strong></h6>
        <p>
          Este manual te guiará a través del uso de nuestro sistema experto para diagnósticos médicos. Sigue las 
          instrucciones para aprovechar al máximo sus funciones.
        </p>
        <h6><strong>1. Inicio de Sesión</strong></h6>
        <p>Ingresa tus credenciales para acceder al sistema. Si no tienes una cuenta, puedes registrarte fácilmente.</p>
        <h6><strong>2. Ingreso de Información</strong></h6>
        <p>
          Completa el formulario con tus síntomas y antecedentes médicos. Asegúrate de que la información sea precisa 
          para obtener resultados fiables.
        </p>
        <h6><strong>3. Interpretación de Resultados</strong></h6>
        <p>
          El sistema proporcionará un diagnóstico basado en tus datos. Recuerda que este es un soporte y no reemplaza 
          una consulta médica.
        </p>
        <h6><strong>Soporte Técnico</strong></h6>
        <p>
          Si necesitas ayuda, contáctanos en soporte@diagnosticointeligente.com.
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="privacyModalLabel">Políticas de Privacidad y Términos y Condiciones</h5>
      </div>
      <div class="modal-body">
        <h6><strong>Bienvenido a Diagnóstico Inteligente</strong></h6>
        <p>
          Antes de continuar utilizando nuestro software, por favor revisa nuestras **Políticas de Privacidad** 
          y **Términos y Condiciones**. Asegúrate de comprender cómo manejamos tu información y las condiciones 
          bajo las cuales puedes usar nuestros servicios.
        </p>
        <hr>

        <h5><strong>Políticas de Privacidad</strong></h5>
        <p>
          Nuestro software recopila y utiliza información personal y médica para ofrecer diagnósticos precisos. 
          A continuación, detallamos nuestras prácticas:
        </p>
        <ul>
          <li>Datos personales como nombre, edad y género.</li>
          <li>Información médica relacionada con síntomas y antecedentes clínicos.</li>
          <li>Datos técnicos como dirección IP y tipo de dispositivo.</li>
        </ul>
        <h5><strong>Términos y Condiciones</strong></h5>
        <p>
          Al usar nuestro software, aceptas cumplir con los siguientes términos y condiciones:
        </p>
        <ul>
          <li>El software está diseñado únicamente para uso personal y no debe emplearse con fines comerciales o ilegales.</li>
          <li>Aunque nos esforzamos por ofrecer diagnósticos precisos, el software no sustituye la consulta con profesionales médicos.</li>
          <li>Nos reservamos el derecho de actualizar las políticas y términos en cualquier momento.</li>
        </ul>
        <hr>
        <h6><strong>Confirmación</strong></h6>
        <form id="privacyForm">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="checkPrivacy">
            <label class="form-check-label" for="checkPrivacy">Acepto las Políticas de Privacidad.</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="checkTerms">
            <label class="form-check-label" for="checkTerms">Acepto los Términos y Condiciones.</label>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="acceptPrivacyButton" disabled>Aceptar y Continuar</button>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5 pt-5">
  <div class="mx-auto" style="width:400px;">
  <div class="card" style="width: 27rem;">
    <div class="card-body">
    <form class="form-signin" action="validarlogin.php" method="POST">
        <div class="text-center mb-4">
         
          <img src="Public/Imagen/osletcare.jpg" width="250" height="250">
          <p>Iniciar Sesion</p>
        </div>

        <div class="form-label-group pb-2">
          <label for="email">Correo Electronico</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Correo electronico" required autofocus>
          
        </div>

        <div class="form-label-group pb-5">
          <label for="password">Contraseña</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
          
        </div>
 


        <button class="btn btn-lg btn-primary btn-block" type="submit">Inicar Sesion</button>
        <!-- <button class="btn btn-lg btn-second btn-block" type="button" onclick="openCamera();">Inicia sesion con tu rostro</button> -->
        <a href="/centraldent/registrar.php" class="btn btn-lg btn-second btn-block mt-3 mb-3" role="button" aria-pressed="true">Registrarse</a>  
      </form>
    </div>
  </div>
      
   </div>
</div>

<!-- <div id="modal" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom">
    <header class="w3-container w3-teal"> 
    <span onclick="closeCamera();" 
    class="w3-button w3-display-topright">X</span>
    <h3 class="w3-center">Suba su fotografia para poder hacer el reconocimineto facial.</h3>        
    </header>
    <div class="w3-container w3-center">        
      <p>Tomese una foto en este comento donde se ecuentre solo usted.</p>
      
      <div class="w3-container w3-center">
        <div id="my_camera" style="width:320px; height:240px;display:inline-block;"></div>
        <div id="my_result"></div>
        <a class="w3-btn w3-teal w3-center" style="width:50%; margin-top: 20px;margin-bottom: 20px;" onclick="take_snapshot();">Tomarse foto</a>
      </div>
      <div class="w3-container w3-center">
        <div class="w3-row" style="margin-left: 10px;">
         
          <form class="w3-row-padding" method="post" action="validarreconocimiento.php" enctype="multipart/form-data">
            <input id="mydata" type="hidden" name="foto" value=""/>
            <button class="w3-btn w3-teal w3-center" style="width:50%; margin-top: 20px;margin-bottom: 20px;">Iniciar Sesion con rostro</button>
          </form>
          
        </div>
        
      </div>
    </div>

  </div>
</div> -->
<!-- <div id="modal-container">
        <div id="modal-content">
            <h2>Términos y Condiciones</h2>
            <h1>Términos y Condiciones para Reservas en Clínica Dental</h1>
            <div id="content-container">
              <h2>1. Aceptación de Términos y Condiciones</h2>
              <p>Al utilizar nuestros servicios de reserva en línea para la clínica dental, aceptas cumplir y estar sujeto a estos términos y condiciones. Si no estás de acuerdo con alguno de los términos, te pedimos que no utilices nuestros servicios.</p>

              <h2>2. Reservas y Confirmaciones</h2>
              <p>2.1. Las reservas están sujetas a disponibilidad y se confirmarán por correo electrónico o mediante otro medio de comunicación especificado por la clínica dental.</p>
              <p>2.2. Es responsabilidad del usuario proporcionar información precisa y actualizada al realizar una reserva.</p>

              <h2>3. Cancelaciones y Modificaciones</h2>
              <p>3.1. Cualquier cancelación o modificación de una reserva debe realizarse con anticipación y de acuerdo con la política de cancelación de la clínica dental.</p>
              <p>3.2. La clínica dental se reserva el derecho de aplicar cargos por cancelación según su política interna.</p>

              <h2>4. Responsabilidad del Usuario</h2>
              <p>4.1. El usuario es responsable de cualquier información proporcionada durante el proceso de reserva.</p>
              <p>4.2. El usuario garantiza que tiene la autoridad necesaria para realizar la reserva en nombre de cualquier otra persona incluida en la misma.</p>

              <h2>5. Privacidad y Seguridad</h2>
              <p>5.1. La información proporcionada durante el proceso de reserva estará sujeta a nuestra política de privacidad.</p>
              <p>5.2. Nos comprometemos a tomar medidas para garantizar la seguridad de la información proporcionada, pero no nos hacemos responsables de eventos fuera de nuestro control.</p>

              <h2>6. Tarifas y Pagos</h2>
              <p>6.1. Las tarifas por servicios dentales y cualquier otro cargo se describirán claramente durante el proceso de reserva.</p>
              <p>6.2. Los pagos se realizarán según las políticas de pago establecidas por la clínica dental.</p>

              <h2>7. Cambios en los Términos y Condiciones</h2>
              <p>Nos reservamos el derecho de actualizar o cambiar estos términos y condiciones en cualquier momento. Cualquier cambio será efectivo inmediatamente después de su publicación en nuestro sitio web.</p>
              <button id="accept-button" onclick="acceptTerms()">Acepto Términos y Condiciones</button>

            </div>
    
        </div>
    </div> -->

    <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            openModal();
        });

        function openModal() {
            document.getElementById('modal-container').classList.add('active');
        }

        function closeModal() {
            document.getElementById('modal-container').classList.remove('active');
        }

        function acceptTerms() {
            alert('Términos y condiciones aceptados. Puedes realizar acciones adicionales aquí.');
            closeModal();
        }
    </script> -->

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        var privacyModal = new bootstrap.Modal(document.getElementById("privacyModal"));
        var manualModal = new bootstrap.Modal(document.getElementById("manualModal"));
        var acceptPrivacyButton = document.getElementById("acceptPrivacyButton");
        var form = document.getElementById("privacyForm");

        // Mostrar el primer modal automáticamente al cargar la página
        privacyModal.show();

        // Habilitar el botón "Aceptar y Continuar" solo si todas las casillas están marcadas
        form.addEventListener("change", function () {
          var allChecked = document.querySelectorAll("#privacyForm .form-check-input:checked").length ===
            document.querySelectorAll("#privacyForm .form-check-input").length;
          acceptPrivacyButton.disabled = !allChecked;
        });

        // Mostrar el segundo modal después de aceptar el primero
        acceptPrivacyButton.addEventListener("click", function () {
          privacyModal.hide();
          manualModal.show();
        });
      });
    </script>
<script>
  
  function take_snapshot(){
    Webcam.snap(function(data_uri) {
      document.getElementById('my_result').innerHTML = '<img src="'+data_uri+'"/>';
      var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');
    
      document.getElementById('mydata').value = raw_image_data;
    });

  }

  function openCamera(){
    document.getElementById("modal").style.display = "block";
    Webcam.attach('#my_camera');
    Webcam.set({
      width: 320,
      height: 240,
      dest_width: 640,
      dest_height: 480,
      image_format: 'jpg',
      jpeg_quality: 90,
      force_flash: false,
      flip_horiz: true,
      fps: 45
    });
  }

  function closeCamera(){
    document.getElementById("modal").style.display = "none";
    //Webcam.reset()
  }

</script> 
<script src="webcam.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>