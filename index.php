<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Simulador de Inversiónes</title>
</head>

<nav class="navbar">
    <!-- LOGO -->
    <div class="logo"><a href="https://tamayocapital.com/"><img src="assets/tamayo-capital.png" alt="" width="196px"
                height="66px" class="d-inline-block align-text-top"></a></div>
    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
        <!-- USING CHECKBOX HACK -->
        <input type="checkbox" id="checkbox_toggle" />
        <label for="checkbox_toggle" class="hamburger">&#9776;</label>
        <!-- NAVIGATION MENUS -->
        <div class="menu">
            <li><a href="https://tamayocapital.com/nosotros/">NOSOTROS</a></li>
            <li><a href="https://tamayocapital.com/quiero-invertir/">PARTICIPA COMO DESAROLLADOR</a></li>
            <li><a href="https://tamayocapital.com/blog/">BLOG</a></li>
            <li><a href="https://tamayocapital.com/tcare/">BOLSA DE TRABAJO</a></li>
        </div>
    </ul>
</nav>

<body>
    <div class="txt">
        <h1>Simulador de <strong> "Anexo A"</strong></h1>
    </div>

    <form action="correos.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="rangos">Selecciona un Monto</p>
                    <input id="inversion" name="inversion" type="range" min="500000" max="10000000" step="10000"
                        onchange="summation()" oninput="impInversion(this.value)">
                    <p class="rangos">Selecciona un Plazo</p>
                    <input id="plazo" type="range" name="plazo" min="18" max="24" step="6" onchange="summation()"
                        oninput="impPlazo(this.value)">
                </div>
                <div class="col-md-3">
                    <p class="texto">
                        Capital
                    </p>
                    <h3>
                        <p style="font-size:30px" id="monto_invertido">500,000 M.N.</p>
                    </h3>
                </div>
                <div class="col-md-3" style="margin-left: -25px;">
                    <p class="texto">
                        Plazo
                    </p>
                    <h3>
                        <p style="font-size:30px" id="meses_seleccionados">18 Meses</p>
                    </h3>
                </div>
                <div class="borde">
                </div>
            </div>

            <!-- Simulador parte dos -->
            <!-- retorno de inversion -->

            <div class="red">
                <div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-6">
                        </div>
                        <div class="col-3" style="text-align: right; border-bottom:1px solid #ababab">
                            <p id="monto_invertido" style="font-size:20px;">Monto</p>
                        </div>
                        <div class="col-3" style="text-align: right; border-bottom:1px solid #ababab">
                            <p class="tabla">Tasas</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-6">
                            <p class="tabla">Tu retorno mensual sería de:</p>
                        </div>
                        <div class="col-3" style="text-align: right;">
                            <p class="tabla-1"><span id="porcentaje_mensual"></span></p>
                            <p id="monto_invertido"></p>
                        </div>
                        <div class="col-3" style="text-align: right;">
                            <p id="tasa" class="tabla-1"></p>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 20px;">
                        <div class="col-6">
                            <p class="tabla">Tu retorno al <strong>finalizar el plazo sería de:</strong></p>
                        </div>
                        <div class="col-3" style="text-align: right;">
                            <p id="retorno_inversion" class="tabla-1"></p>
                        </div>
                        <div class="col-3" style="text-align: right;">
                            <p id="tasa_final" class="tabla-1"></p>
                        </div>
                    </div>
                    <div class="divisor">
                        <img src="css/logo-tc.png">
                    </div>
                </div>
            </div>
            <!-- retorno de inversion -->
            <!-- retorno de inversion mobil -->
            <div class="contenedor">
                <p class="icono">Tu retorno de inversion<br>
                    <strong>mensual es de:</strong>
                </p>
                <div class="row" style="border-bottom: 1px solid #000;">
                    <div class="col" style="text-align:center;">
                        <p style="font-size:16px; font-weight:600;">Monto</p>
                    </div>
                    <div class="col" style="text-align:center;">
                        <p style="font-size:16px; font-weight:600;">Tasa</p>
                    </div>
                </div>
                <div class="row" style="padding-top:20px">
                    <div class="col" style="text-align:center;">
                        <p style="font-size:25px; font-weight:600;">$8,000 M.N.</p>
                    </div>
                    <div class="col" style="text-align:center;">
                        <p style="font-size:25px; font-weight:600;">13%</p>
                    </div>
                </div>
            </div>
            <div class="image">
                <img src="assets/plusvalia.png" width="350px" z-index="2">
            </div>
            <!-- Finalizacion de mobil-->
            <div class="rendimientos">
                <h3>Comparación de <strong>rendimientos</strong></h3>
                <div class="row-1" style="justify-content: center;">
                    <div class="col-sm-3">
                        <img src="assets/fibra-anual.png" width="190px">
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/pol-2.png" width="190px">
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/pol-3.png" width="190px">
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/pol-4.png" width="190px">
                    </div>
                </div>
            </div>
            <div class="imagen">
                <img src="assets/tc.png" width="350px">
            </div>
            <div class="comparacion">
                <h3 style="font-size: 35px;">Comparación de <strong>rendimientos</strong></h3>
                <p style="font-size: 23px; font-weight: 400;padding-top: 15px;">Tu retorno al final del plazo sería de:
                    <strong><span id="rendimiento_resumen"></span></strong>
                </p>
            </div>
            <div class="content">
                <div class="row" id="resumen">
                    <div class="col-sm-6 col-order-first">
                        <p style="font-size: 18px;"><strong>(Resumen)</strong> Tu retorno en base al monto sería de:
                        </p>
                        <section class="fondo-final">
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: 18px;">Monto calculado:</p>
                                </div>
                                <div class="col" style="text-align:right;">
                                    <p id="monto_resumen"><strong></strong></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: 18px;">Rendimiento Mensual:</p>
                                </div>
                                <div class="col" style="text-align:right;">
                                    <p id="porcentaje_en_resumen"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: 18px;">Plazo:</p>
                                </div>
                                <div class="col" style="text-align:right;">
                                    <p id="plazo_resumen"></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p style="font-size: 18px;">Tasa:</p>
                                </div>
                                <div class="col" style="text-align:right;">
                                    <p id="tasa_resumen" name="dato"></p>
                                </div>
                            </div>
                            <p class="datos">** Los montos aqui expresados son solo una referencia y están sujetas a
                                aprobación.
                            </p>
                        </section>
                    </div>
                    <div class="col-sm-6" style="padding-top: 30px;">
                        <div>
                            <p class="mobile-text">Hágamos <strong>Contacto</strong></p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="nombre" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="correo" id="exampleInputPassword1"
                                placeholder="Correo Electrónico" required>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" name="telefono" id="exampleInputPassword1"
                                placeholder="Teléfono" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="ciudad" id="exampleInputPassword1"
                                placeholder="Ciudad" required>
                        </div>
                        <div class="form-check">
                            <p>Al enviar el correo acepto los terminos y
                                condiciones</p>
                        </div>
                    </div>
                    <div class="boton">
                        <button type="submit" style="border: none;width: 50%;padding: 15px;font-size: 20px;background: #fffff;">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </form>
    <footer style="background:#101010; padding:30px; color: #ffffff;">
    ©2022 Tamayo Capital
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="motorsimulador.js"></script>
</body>

</html>