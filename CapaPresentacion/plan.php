<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("location: /index.php");
}
include_once("../CapaNegocio/usuario/capaNegocioUsuario.php");
$objetoCapaNegocio= new capaNegocioUsuario();	
$existePlan = $objetoCapaNegocio->verificarPlan($_SESSION['user']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dr.LET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>

<?php
include_once("../plantilla.html");
?>
<style>
    body{margin-top:20px;}
    .pricing-box {
    -webkit-box-shadow: 0px 5px 30px -10px rgba(0, 0, 0, 0.1);
            box-shadow: 0px 5px 30px -10px rgba(0, 0, 0, 0.1);
    padding: 35px 50px;
    border-radius: 20px;
    position: relative;
    }

    .pricing-box .plan {
    font-size: 34px;
    }

    .pricing-badge {
    position: absolute;
    top: 0;
    z-index: 999;
    right: 0;
    width: 100%;
    display: block;
    font-size: 15px;
    padding: 0;
    overflow: hidden;
    height: 100px;
    }

    .pricing-badge .badge {
    float: right;
    -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
    right: -67px;
    top: 17px;
    position: relative;
    text-align: center;
    width: 200px;
    font-size: 13px;
    margin: 0;
    padding: 7px 10px;
    font-weight: 500;
    color: #ffffff;
    background: #fb7179;
    }
    .mb-2, .my-2 {
        margin-bottom: .5rem!important;
    }
    p {
        line-height: 1.7;
    }

</style>
<body>
    <br>
    <br>
    <br>
    <?php
        if($existePlan){
    ?>
        <div class="alert alert-primary" role="alert">
        Actualmente tienes un plan activo,espera a que termine.
        </div>

    <?php
        }
    ?>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

<section class="section" id="pricing">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="title-box text-center">
                    <h3 class="title-heading mt-4">
                    Paquete con el mejor precio</h3>
                    <p class="text-muted f-17 mt-3">Elige uno de los dos mejores planes de la plataforma<br>Realiza tus consultas con el diagnosticador virtual de manera automatica.</p>
                    <img src="images/home-border.png" height="15" class="mt-3" alt="">
                </div>
            </div>
        </div>


        <div class="row mt-5 pt-4">
            <div class="col-lg-4">
                <div class="pricing-box mt-4">
                    <i class="mdi mdi-account h1"></i>
                    <h4 class="f-20">Incial</h4>

                    <div class="mt-4 pt-2">
                        <p class="mb-2 f-18">Funcionalidades</p>

                        <p class="mb-2"><i class="mdi mdi-checkbox-marked-circle text-success f-18 mr-2"></i><b>Acceso</b>
                            al diagnosticador de enfermedades</p>
                        <p class="mb-2"><i class="mdi mdi-close-circle text-danger f-18 mr-2"></i><b>Acceso</b>
                            a realizar citas</p>
                        
                    </div>
                    <p class="mt-4 pt-2 text-muted">Precio con descuentos solo por esta semana.
                    </p>
                    <div class="pricing-plan mt-4 pt-2">
                        <h4 class="text-muted"><s> $9.99</s> <span class="plan pl-3 text-dark">$4.99 </span></h4>
                        <p class="text-muted mb-0">Per Month</p>
                    </div>
                    <input hidden type="text" value="<?php echo $existePlan ?>" name="existePlan" id="existePlan">
                    
                                
                    <div class="mt-4 pt-3">
                        <form action="./../capaDatoRegistrarPlan.php" method="POST" id="form1">
                            <div class="form-row">
                                    <input hidden type="text" class="form-control form-control-sm" id="id" name="id" value="<?php $_SESSION['user'] ?>">
                                    <input hidden type="text" class="form-control form-control-sm" id="fecha" name="fecha" value="<?php $fecha_actual = date('Y-m-d');  // Formato: Año-Mes-Día Hora:Minuto:Segundo
                                    echo $fecha_actual; ?>">
                                    <input hidden type="text" class="form-control form-control-sm" id="fechafin" name="fechafin" value="<?php 
                                    $fecha_actual = date('Y-m-d');  // Fecha actual
                                    $fecha_futura = date('Y-m-d', strtotime($fecha_actual . ' +30 days'));  // Sumar 30 días
                                    echo $fecha_futura;
                                    ?>">
                                    <input hidden type="text" class="form-control form-control-sm" id="tipo" name="tipo" value="1">
                            </div>
                            <?php
                                if($existePlan==0){
                            ?>
                                <div class="form-row  d-flex justify-content-between" id="comprar1" >

                                </div>
                            <?php
                                }else if($existePlan==1){
                            ?>
                                <div hidden class="form-row  d-flex justify-content-between" id="comprar1" >
                                    
                                </div>
                                <button type="submit" disabled class="btn btn-primary btn-rounded" style="background-color: #5882FA">Comprar</button>
                            <?php
                                }
                            ?>
                            
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="pricing-box mt-4">
                    <div class="pricing-badge">
                        <span class="badge">Featured</span>
                    </div>

                    <i class="mdi mdi-account-multiple h1 text-primary"></i>
                    <h4 class="f-20 text-primary">Premium</h4>


                    <div class="mt-4 pt-2">
                        <p class="mb-2 f-18">Funcionalidades</p>

                        <p class="mb-2"><i class="mdi mdi-checkbox-marked-circle text-success f-18 mr-2"></i><b>Acceso</b>
                            al diagnosticador de enfermedades</p>
                        <p class="mb-2"><i class="mdi mdi-checkbox-marked-circle text-success f-18 mr-2"></i><b>Acceso</b>
                            a realizar citas</p>
                    </div>

                    <p class="mt-4 pt-2 text-muted">Precio con descuentos solo por esta semana.
                    </p>

                    <div class="pricing-plan mt-4 pt-2">
                        <h4 class="text-muted"><s> $19.99</s> <span class="plan pl-3 text-dark">$6.99 </span></h4>
                        <p class="text-muted mb-0">Per Month</p>
                    </div>

                    <div class="mt-4 pt-3">
                        <form action="./../capaDatoRegistrarPlan.php" method="POST" id="form2">
                            <div class="form-row">
                                    <input hidden type="text" class="form-control form-control-sm" id="id" name="id" value="<?php $_SESSION['user'] ?>">
                                    <input hidden type="text" class="form-control form-control-sm" id="fecha" name="fecha" value="<?php $fecha_actual = date('Y-m-d');  // Formato: Año-Mes-Día Hora:Minuto:Segundo
                                    echo $fecha_actual; ?>">
                                    <input hidden type="text" class="form-control form-control-sm" id="fechafin" name="fechafin" value="<?php 
                                    $fecha_actual = date('Y-m-d');  // Fecha actual
                                    $fecha_futura = date('Y-m-d', strtotime($fecha_actual . ' +30 days'));  // Sumar 30 días
                                    echo $fecha_futura;
                                    ?>">
                                    <input hidden type="text" class="form-control form-control-sm" id="tipo" name="tipo" value="2">
                            </div>
                            <?php
                                if($existePlan==0){
                            ?>
                                <div class="form-row  d-flex justify-content-between" id="comprar2" >

                                </div>
                            <?php
                                }else if($existePlan==1) {
                            ?>
                                <div class="form-row  d-flex justify-content-between" id="comprar2">
                                </div>
                                    <button type="submit" disabled class="btn btn-primary btn-rounded" style="background-color: #5882FA">Comprar</button>

                            <?php
                                }
                            ?>
                            
                        </form>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://www.paypal.com/sdk/js?client-id=AWrf2qoXeSLRV_IGz_PDzTIeQzg9LLdKu2v1t0CMpNe6R0OwW48S1IuYqBoMOFPnEwVJG6A39dnL8qY6"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const existePlan = document.getElementById("existePlan").value;
        console.log(existePlan);
        if(existePlan==0){
            // Obtener datos desde el DOM
            var precioElement = 6.99;
            var trabajoElement = 'Suscripcion premium';
            var estadoElement = 1;
            var idTrabajoElement = Math.floor(Math.random() * 1000);

            // Conversión de precio a USD (simula una tasa de conversión fija)
            var MONEDA_BOLIVIANOS = 6.96;
            let precio = parseFloat(precioElement) / MONEDA_BOLIVIANOS;
            precio = precio.toFixed(2);

            // Debugging (opcional)
            console.log("Estado:", estadoElement);
            console.log("Precio en BOB:", precioElement);
            console.log("ID Trabajo:", idTrabajoElement);

            // Configurar PayPal Buttons
            paypal.Buttons({
                style: {
                layout: 'vertical',
                color: 'gold',
                shape: 'pill',
                label: 'paypal',
                tagline: false,
                },
                // Crear pago
                createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                    amount: {
                        value: precio, // Precio total en USD
                    },
                    description: trabajoElement, // Nombre del trabajo
                    custom_id: idTrabajoElement, // Identificador único (opcional)
                    }]
                });
                },
                // Ejecutar el pago
                onApprove: (data, actions) => {
                return actions.order.capture().then(details => {
                    alert(`Pago realizado con éxito por ${details.payer.name.given_name}`);
                    // Enviar formulario
                    document.querySelector("#form2").submit(); 
                });
                },
                // Manejo de errores
                onError: (err) => {
                console.error("Error durante el pago:", err);
                alert("Hubo un error al procesar el pago. Inténtalo nuevamente.");
                }
            }).render('#comprar2'); // Renderizar el botón en el contenedor
            // Obtener datos desde el DOM
            precioElement = 4.99;
            trabajoElement = 'Suscripcion basic';
            estadoElement = 1;
            idTrabajoElement = Math.floor(Math.random() * 1000);

            // Conversión de precio a USD (simula una tasa de conversión fija)
            precio = parseFloat(precioElement) / MONEDA_BOLIVIANOS;
            precio = precio.toFixed(2);

            // Debugging (opcional)
            console.log("Estado:", estadoElement);
            console.log("Precio en BOB:", precioElement);
            console.log("ID Trabajo:", idTrabajoElement);

            // Configurar PayPal Buttons
            paypal.Buttons({
                style: {
                layout: 'vertical',
                color: 'gold',
                shape: 'pill',
                label: 'paypal',
                tagline: false,
                },
                // Crear pago
                createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                    amount: {
                        value: precio, // Precio total en USD
                    },
                    description: trabajoElement, // Nombre del trabajo
                    custom_id: idTrabajoElement, // Identificador único (opcional)
                    }]
                });
                },
                // Ejecutar el pago
                onApprove: (data, actions) => {
                return actions.order.capture().then(details => {
                    alert(`Pago realizado con éxito por ${details.payer.name.given_name}`);
                    // Enviar formulario
                    document.querySelector("#form1").submit(); 
                });
                },
                // Manejo de errores
                onError: (err) => {
                console.error("Error durante el pago:", err);
                alert("Hubo un error al procesar el pago. Inténtalo nuevamente.");
                }
            }).render('#comprar1'); // Renderizar el botón en el contenedor
        }
    });
    
  
</script>
</body>
</html>