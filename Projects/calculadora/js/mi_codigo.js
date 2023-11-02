$(document).ready(function(){
    //alert ("Funciona!!!");

    $("#cmdProcesar").click(function(){
        //recuperar datos en variables
        //las variables no son tipadas 
        var cad = "hola";
        cad = 5;

        //para la definicion puede usar let o var 
        let n1 = 0;
        let n2 = 0;
        let r = 0;


        n1 = parseInt($("#txtn1").val());
        n2 = parseInt($("#txtn2").val());
        //parseFloat  conversion a numeros con coma decimal
        let op = $("#lstop").val();
 
        //realizan el proceso
        if (op=="+"){
            r = n1 + n2;
        }
        if (op=="-"){
            r = n1 - n2;
        }
        if (op=="/"){
            r = n1 / n2;
        }
        if (op=="*"){
            r = n1 * n2;
        }
        if (op=="%"){
            r = n1 % n2;
        }

        //presentan resultados 

        alert("El resultado de la operación es: " + r);



    });











    $("#xh1").click(function(){
        alert("Evento click H1");
    });

});