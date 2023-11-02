<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
        <?php
        include("menu.php");
        include("conecta.php");
        $bd = conectar();
        ?>
        <h3>Eliminar usuarios del sistema</h3>
        <form action="del_user2.php" method="POST">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Seleccionar</th>
                        <th>Cédula</th>
                        <th>Nombres</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "select cedusu, nomusu from usuarios order by nomusu";
                    $datos = mysqli_query($bd, $sql);
                    while ($arr = mysqli_fetch_array($datos)) {
                        echo "<tr>";
                        echo "<td><input type='radio' name='victima' value='$arr[0]' required></td>";
                        echo "<td>$arr[0]</td>";
                        echo "<td>$arr[1]</td>";
                        echo "</tr>";
                    }
                    mysqli_close($bd);
                    ?>
                </tbody>
            </table>

            <hr>
            <input type="submit" value="Eliminar Registro" class="btn btn-danger">        
        </form>

    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>