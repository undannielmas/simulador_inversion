var inversion = 20;
var tiempo_inversion = 0;


function getValues(){
    inversion = document.getElementById("inversion").value;
    tiempo_inversion = document.getElementById("plazo").value;
}

function impInversion(val){
    document.getElementById("monto_invertido").innerHTML = (val).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " M.N.";
}

function impPlazo(val){
    document.getElementById("meses_seleccionados").innerHTML = val + " Meses";
}

function summation(){

    inversion = document.getElementById("inversion").value;
    tiempo_inversion = document.getElementById("plazo").value;

    //tasas



    if ([inversion] > 499999 && [tiempo_inversion] == 18) {
        var tasa = 12 + 1 + "%";
    }
    else if ([inversion] > 499999 && [tiempo_inversion] == 24) {
        var tasa = 13 + 1 + "%";
    }

    if ([inversion] > 999999 && [tiempo_inversion] == 18) {
        var tasa = 13 + 1 + "%";
    }
    else if ([inversion] > 999999 && [tiempo_inversion] == 24) {
        var tasa = 14 + 1 + "%";
    }

    if ([inversion] > 1999999 && [tiempo_inversion] == 18) {
        var tasa = 14 + 1 + "%";
    }
    else if ([inversion] > 1999999 && [tiempo_inversion] == 24) {
        var tasa = 15 + 1 + "%";
    }

    if ([inversion] > 9999999 && [tiempo_inversion] == 18) {
        var tasa = 15 + 1 + "%";
    }

    // tasas al finalizar la inversión 

    if ([inversion] > 499999 && [tiempo_inversion] == 18) {
        var tasa_final = 14 + 1 + "%";
    }
    else if ([inversion] > 499999 && [tiempo_inversion] == 24) {
        var tasa_final = 15 + 1 + "%";
    }

    if ([inversion] > 999999 && [tiempo_inversion] == 18) {
        var tasa_final = 15 + 1 + "%";
    }
    else if ([inversion] > 999999 && [tiempo_inversion] == 24) {
        var tasa_final = 16 + 1 + "%";
    }

    if ([inversion] > 1999999 && [tiempo_inversion] == 18) {
        var tasa_final = 16 + 1 + "%";
    }
    else if ([inversion] > 1999999 && [tiempo_inversion] == 24) {
        var tasa_final = 17 + 1 + "%";
    }

    if ([inversion] > 9999999 && [tiempo_inversion] == 18) {
        var tasa_final = 17 + 1 + "%";
    }
    else if ([inversion] > 9999999 && [tiempo_inversion] == 24) {
        var tasa_final = 17 + 1 + "%";
    }




    //Inversion por meses

    if ([inversion] > 499999 && [tiempo_inversion] == 18) {
        /*Precio de la inversion * ROI / Meses */
        var suma = (inversion) * .195 / 15;
        var entero = suma.toFixed();
        var intComas = entero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] > 499999 && [tiempo_inversion] == 24) {
        /*Precio de la inversion * ROI / Meses */
        var suma = (inversion) * .28 / 21;
        var entero = suma.toFixed();
        var intComas = entero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] > 999999 && [tiempo_inversion] == 18) {
        /*Precio de la inversion * ROI / Meses */
        var suma = (inversion) * .21 / 15;
        var entero = suma.toFixed();
        var intComas = entero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] > 999999 && [tiempo_inversion] == 24) {
        /*Precio de la inversion * ROI / Meses */
        var suma = (inversion) * .30 / 21;
        var entero = suma.toFixed();
        var intComas = entero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] > 1999999 && [tiempo_inversion] == 18) {
        /*Precio de la inversion * ROI / Meses */
        var suma = (inversion) * .225 / 15;
        var entero = suma.toFixed();
        var intComas = entero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] > 1999999 && [tiempo_inversion] == 24) {
        /*Precio de la inversion * ROI / Meses */
        var suma = (inversion) * .32 / 21;
        var entero = suma.toFixed();
        var intComas = entero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] >= 10000000 && [tiempo_inversion] == 18) {
        /*Precio de la inversion * ROI / Meses */
        var suma = (inversion) * .24 / 15;
        var entero = suma.toFixed();
        var intComas = entero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    // Retorno al final de la inversión

    if ([inversion] > 499999 && [tiempo_inversion] == 18) {
        /*Precio de la inversion * ROI / Meses */
        var suma_final = (inversion) * .22;
        var entero_final = suma_final.toFixed();
        var intComas_final = entero_final.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] > 499999 && [tiempo_inversion] == 24) {
        /*Precio de la inversion * ROI / Meses */
        var suma_final = (inversion) * .32;
        var entero_final = suma_final.toFixed();
        var intComas_final = entero_final.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] > 999999 && [tiempo_inversion] == 18) {
        /*Precio de la inversion * ROI / Meses */
        var suma_final = (inversion) * .24;
        var entero_final = suma_final.toFixed();
        var intComas_final = entero_final.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] > 999999 && [tiempo_inversion] == 24) {
        /*Precio de la inversion * ROI / Meses */
        var suma_final = (inversion) * .34;
        var entero_final = suma_final.toFixed();
        var intComas_final = entero_final.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] > 1999999 && [tiempo_inversion] == 18) {
        /*Precio de la inversion * ROI / Meses */
        var suma_final = (inversion) * .255;
        var entero_final = suma_final.toFixed();
        var intComas_final = entero_final.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] > 1999999 && [tiempo_inversion] == 24) {
        /*Precio de la inversion * ROI / Meses */
        var suma_final = (inversion) * .36;
        var entero_final = suma_final.toFixed();
        var intComas_final = entero_final.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    if ([inversion] > 9999999 && [tiempo_inversion] == 18) {
        /*Precio de la inversion * ROI / Meses */
        var suma_final = (inversion) * .27;
        var entero_final = suma_final.toFixed();
        var intComas_final = entero_final.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(intComas);
    }

    
    document.getElementById("porcentaje_mensual").innerHTML = "$" +intComas + " M.N.";
    document.getElementById("porcentaje_en_resumen").innerHTML = "$" +intComas + " M.N.";
    document.getElementById("monto_resumen").innerHTML = "$" + (inversion).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " M.N.";
    document.getElementById("plazo_resumen").innerHTML = tiempo_inversion + " Meses";

    document.getElementById("tasa").innerHTML = tasa;
    document.getElementById("tasa_resumen").innerHTML = tasa;
    document.getElementById("tasa_final").innerHTML = tasa_final;

    document.getElementById("retorno_inversion").innerHTML = "$" +intComas_final + " M.N.";
    document.getElementById("rendimiento_resumen").innerHTML = "$" +intComas_final + " M.N.";

    
}






