<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">

        <?php
            include("conecta.php");
            $bd = conectar();
            $ced = $_POST["txtid"];
            $sql = "select  idreg,cedulaCl,nombresCl,apellidosCl,direccionCl,telefonoCl,correoCl from clientes where cedulaCl = '$ced' order by nombresCl";
            $datos = mysqli_query($bd,$sql);
            if(mysqli_num_rows($datos)==0){
                echo "<div class='alert alert-success' role='alert'><b>Información</b><br>no se encontro cedula</div>";
                echo "<a href='modificar_cliente1.php'><input type='button' class='btn btn-primary' value='volver'></a>";
                
            }else{
                include("modificar_cliente3.php");
                
                
            }
            

        ?>   

    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>