<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
       <?php include("menu.php"); ?>
       <h3>Resultado inserción</h3>
        <?php
            include("conecta.php");
            $bd = conectar();

            $id = $_POST["intced"];
            $nom = $_POST["dateing"];
            $unidades = $_POST["intstock"];


            $sql = "insert into tiquetera values ('$id','$nom','$unidades')";

            $res = mysqli_query($bd,$sql);

            if (!$res){
                echo "<div class='alert alert-danger' role='alert'><b>Error</b><br>Almuerzo no adicionado!!<br>" . mysqli_error($bd) . "</div>";
            }
            else {
                echo "<div class='alert alert-success' role='alert'><b>Información</b><br>Almuerzo(s) Adicionado con éxito!!</div>";
            }
                   
            mysqli_close($bd);
        ?>


    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>