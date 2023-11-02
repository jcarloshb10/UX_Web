<!DOCTYPE html>
<html>

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
        <div class="row">
            <div class="col">

                <h3>Listar formulas de un usuario</h3>
                <form action="del_formulas1.php" method="POST">
                    <div class="mb-3">
                        <label for="lstusu" class="form-label">Seleccione un usuario</label>
                        <select name="lstusu" class="form-select">
                            <?php
                            $sql = "select nomusu, cedusu from usuarios order by nomusu";
                            $datos = mysqli_query($bd, $sql);
                            while ($arr = mysqli_fetch_array($datos)) {
                                echo "<option value='$arr[1]'>$arr[0]</option>";
                            }
                            mysqli_close($bd);
                            ?>
                        </select>
                    </div>

                    <hr>
                    <input type="submit" value="Consultar" class="btn btn-primary">

                </form>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>