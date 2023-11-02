$(document).ready(function(){
    //alert ("Funciona!!!");

    $("#cmdProcesar").click(function(){

        //para la definicion puede usar let o var 
        let n1 = 0;
        let n2 = 0;
        let n3 = 0;
        let r = 0;
        let cues_A = 5; 
        let cues_B = 8; 
        let cues_C = 6; 

        

        n1 = parseInt($("#txtn1").val());
        n2 = parseInt($("#txtn2").val());
        n3 = parseInt($("#txtn3").val());

        r = (n1 * cues_A) + (n2 * cues_B) + (n3 * cues_C);

        
        
        //calculan resultados 
        horat = parseInt(r/60); 
        //let min = $("#lstmin").val(); 
        min = Math.round((r/60 - horat) * 60);

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
        }

     
        
    });

});