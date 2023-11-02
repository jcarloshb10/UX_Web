<!DOCTYPE html>
<html>
<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
       <?php include("menu.php"); ?>
       <h4>Formulas asignadas son:</h4>
        <table class="table table-striped">
            <thead><tr><th>Medicamento</th><th>Dosis</th><th>Fecha expiración</th><th>Hora</th></tr></thead>
            <tbody>
            <?php
            include("conecta.php");
            $bd = conectar();
            $ced = $_POST["lstusu"];
            $c=0;

            $sql = "select medicamento, dosis, fecexp, hora from formulas where cedusu = '$ced' order by medicamento";
            $datos = mysqli_query($bd,$sql);
            while ($arr = mysqli_fetch_array($datos)){
                echo "<tr>";
                echo "<td>$arr[0]</td>";
                echo "<td>$arr[1]</td>";
                echo "<td>$arr[2]</td>";
                echo "<td>$arr[3]</td>";
                echo "</tr>";
                $c++;
            }
            mysqli_close($bd);
            ?>
            </tbody>
        </table>
        <br>
        <?php
            echo "<p><i>Registros encontrados: $c</i></p>";
        ?>

    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>