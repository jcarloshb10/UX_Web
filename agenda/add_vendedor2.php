<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
       <?php include("menu.php"); ?>
       <h3>Resultado de la inserción</h3>
        <?php
            include("conecta.php");
            $bd = conectar();
          
            $ced = $_POST["txtced"];
            $nom = $_POST["txtnom"];
            $apell = $_POST["txtapell"];
            $gen = $_POST["optgen"];
            $fec = $_POST["txtfec"];
            $direc = $_POST["txtdirec"];
            $tel = $_POST["txttel"];
            $corr = $_POST["txtcorreo"];
            //codigo con el año 22  mas los ultimos  3 dijitos de la cedula 
            $id="22".$ced[7].$ced[8].$ced[9];

            $sql = "insert into vendedores values ('$id','$ced','$nom','$apell','$gen','$fec','$direc','$tel','$corr')";
            //echo $sql;

            $res = mysqli_query($bd,$sql);

            if (!$res){
                echo "<div class='alert alert-danger' role='alert'><b>Error</b><br>Registro no adicionado!!<br>" . mysqli_error($bd) . "</div>";
            }
            else {
                echo "<div class='alert alert-success' role='alert'><b>Información</b><br>Registro Adicionado con éxito!!</div>";
            }
            mysqli_close($bd);
        ?>


    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>