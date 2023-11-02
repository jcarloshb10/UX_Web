<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
        <?php include("menu.php"); ?>
        <h3>Registro de usuarios</h3>
        <hr>
        <div class="row">
            <div class="col-6">
                <form action="modificar_cliente2.php" method="post">
                    <div class="mb-3">
                        <label for="txtname" class="form-label">nombre del producto</label>
                        <input type="text" required min="0" name="txtname" id="txtname" class="form-control">
                    </div>
                    <hr>
                    <input type="submit" value="Buscar" class="btn btn-primary">
               
                    
                </form>

            </div>

            <div class="col-6"></div>
        </div>
    </div>
    <!--fin contenedor-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>