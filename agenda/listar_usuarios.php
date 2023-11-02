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
        <h3>Listado de usuarios registrados</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                <th>Cédula</th>
                <th>Nombres</th>
                <th>Epicrisis</th>
                <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "select cedusu, nomusu, epicrisis, telusu from usuarios order by nomusu";
                    $datos = mysqli_query($bd,$sql);
                    while ($arr = mysqli_fetch_array($datos)){
                        echo "<tr>";
                        echo "<td>$arr[0]</td>";
                        echo "<td>$arr[1]</td>";
                        echo "<td>$arr[2]</td>";
                        echo "<td>$arr[3]</td>";
                        echo "</tr>";
                    }
                    mysqli_close($bd);
                ?>
            </tbody>
        </table>
    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>