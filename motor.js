function summation() {
    var monto = document.getElementById('monto').value;
    var meses = document.getElementById('meses').value;
    var porcentaje_final = "";
    var monto_al_finalzar = monto_finalizar;


    //Monto final

    if ([monto] > 499999 && [meses] == 18) {
        /*Precio de la inversion * ROI / Meses */
        var monto_finalizar = ([monto]) * (.22);
        var entero_finalizar = monto_finalizar.toFixed();
        var monto_con_comas = entero_finalizar.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(monto_con_comas);
    }

    if ([monto] > 499999 && [meses] == 24) {
        /*Precio de la inversion * ROI / Meses */
        var monto_finalizar = ([monto]) * (.32);
        var entero_finalizar = monto_finalizar.toFixed();
        var monto_con_comas = entero_finalizar.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(monto_con_comas);
    }






    //Porcentajes


    if ([monto] > 499999 && [meses] == 18) {
        var porcentaje_final = 12 + 1;
    }
    else if ([monto] > 499999 && [meses] == 24) {
        var porcentaje_final = 13 + 1;
    }

    if ([monto] > 999999 && [meses] == 18) {
        var porcentaje_final = 13 + 1;
    }
    else if ([monto] > 999999 && [meses] == 24) {
        var porcentaje_final = 14 + 1;
    }

    if ([monto] > 1999999 && [meses] == 18) {
        var porcentaje_final = 14 + 1;
    }
    else if ([monto] > 1999999 && [meses] == 24) {
        var porcentaje_final = 15 + 1;
    }

    if ([monto] == 10000000 && [meses] == 18) {
        var porcentaje_final = 15 + 1;
    }
    else if ([monto] == 10000000 && [meses] == 24) {
        var porcentaje_final = 15 + 1;
    }


    // ROI POR 24 MESES



    if ([monto] > 499999 && [meses] == 18) {
        /*Precio de la inversion * ROI / Meses */
        var monto_seleccionado = ([monto]) * (.195) / (15);
        var entero = monto_seleccionado.toFixed();
        var monto_concomas = entero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(monto_concomas);
    }

    if ([monto] > 499999 && [meses] == 24) {
        /*Precio de la inversion * ROI / Meses */
        var monto_seleccionado = ([monto]) * (.28) / (21);
        var entero = monto_seleccionado.toFixed();
        var monto_concomas = entero.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        console.log(monto_concomas);
    }


    document.getElementById('roi').innerHTML = monto_seleccionado;

    document.getElementById('porcentaje_final').innerHTML = "El porcentaje es: " + porcentaje_final + "%";

    document.getElementById('monto_con_comas').innerHTML = "El monto al finalizar tu inversion es " + monto_con_comas;




}


function myFunction(val) {

    document.getElementById("monto_invertido").innerHTML = (val).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " M.X";
    document.getElementById("monto_selectivo").innerHTML = (val).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + " M.X";
    
}



function myFunction1(val) {
    document.getElementById("meses_seleccionados").innerHTML = val + " Meses";
}

