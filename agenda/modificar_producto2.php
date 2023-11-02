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
            $produ = $_POST["txtid"];
            $tipob=$_POST["opt"];
            if($tipob=='C'){
                $sql = "select  idPr,nombrePr,precioPr,stock from productos where idPr = '$produ' ";

            }else {
                $sql = "select  idPr,nombrePr,precioPr,stock from productos where nombrePr = '$produ' ";

            }
            
           
            $datos = mysqli_query($bd,$sql);
            if(mysqli_num_rows($datos)==0){
                echo "<div class='alert alert-success' role='alert'><b>Información</b><br>no se encontro</div>";
                echo "<a href='modificar_producto1.php'><input type='button' class='btn btn-primary' value='volver'></a>";
                
            }else{
                
                
                include("modificar_producto3.php");
                mysqli_close($bd);
                
            }
            

        ?>   

    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>