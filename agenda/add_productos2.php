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

            $id = $_POST["txtid"];
            $nom = $_POST["txtnom"];
            $precio = $_POST["txtprec"];
            $stock = $_POST["txtstock"];


            $sql = "insert into productos values ('$id','$nom','$precio','$stock')";
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