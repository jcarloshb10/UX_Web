$(document).ready(function(){
    //alert ("Funciona!!!");

    $("#cmdProcesar").click(function(){

        //para la definición puede usar let o var 
        let hora = 0;
        let minutos = 0;
        let segundos = 0;
        let operando = 0;
        var resultado = new Date(); 

        
        hora = parseInt($("#txtn1").val());
        minutos = parseInt($("#txtn2").val());
        segundos = parseInt($("#txtn3").val());
        operando = parseInt($("#txtn4").val());
        resultado = date($("#txtn5").val());

        resultado = hora,minutos,segundos;
        
        document.getElementById("txtn5").value = resultado;

        //calculan resultados 
        //horat = parseDate(r/60); 
        //let min = $("#lstmin").val(); 
        /*min = Math.round((r/60 - horat) * 60);

        //presentan resultados 
        if ( horat == 0 && min == 0){
            document.getElementById("txtn4").value = "No hay exámenes para calificar. ";
        } 
        else if ( horat == 0 && min == 1){
            document.getElementById("txtn4").value = "El profesor tardará " + min + " minuto en calificar los exámenes. ";
        } 
        else if (min == 0 && horat == 1){
            document.getElementById("txtn4").value = "El profesor tardará " + horat + " hora en calificar los exámenes. ";
        }
        else if (min == 0 && horat >= 2){
            document.getElementById("txtn4").value = "El profesor tardará " + horat + " horas en calificar los exámenes. ";
        }
        else if (horat == 0 && min > 1){
            document.getElementById("txtn4").value = "El profesor tardará " + min + " minutos en calificar los exámenes. ";
        }
        else if (horat == 1 && min ==1 ){
            document.getElementById("txtn4").value = "El profesor tardará " + horat + " hora y " + min + " minuto en calificar los exámenes. ";
        }
        else if (horat == 1 && min >1 ){
            document.getElementById("txtn4").value = "El profesor tardará " + horat + " hora y " + min + " minutos en calificar los exámenes. ";
        }
        else if (horat >= 2 && min ==1 ){
            document.getElementById("txtn4").value = "El profesor tardará " + horat + " horas y " + min + " minuto en calificar los exámenes. ";
        }
        else if (horat >= 2 && min >1 ){
            document.getElementById("txtn4").value = "El profesor tardará " + horat + " horas y " + min + " minutos en calificar los exámenes. ";
        }*/

     
        
    });

});