<!DOCTYPE html>
<html>
<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
       <?php include("menu.php"); ?>
       <h3>Resultado de la inserción de la fórmula médica</h3>
        <?php
            include("conecta.php");
            $bd = conectar();

            $ced = $_POST["lstusu"];
            $med = $_POST["txtmed"];
            $dos = $_POST["txtdos"];
            $fec = $_POST["txtfec"];
            $hor = $_POST["txthor"];
            $est = $_POST["lstest"];

            $sql = "insert into formulas values (null, '$ced','$med','$dos','$fec','$hor','$est')";
            //echo $sql;

            $res = mysqli_query($bd,$sql);

            if (!$res){
                echo "<div class='alert alert-danger' role='alert'><b>Error</b><br>Formula no adicionada!!<br>" . mysqli_error($bd) . "</div>";
            }
            else {
                echo "<div class='alert alert-success' role='alert'><b>Información</b><br>Formula Adicionado con éxito!!</div>";
            }
            mysqli_close($bd);
        ?>


    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>