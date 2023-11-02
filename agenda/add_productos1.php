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
                <form action="add_productos2.php" method="post">
                    <div class="mb-3">
                        <label for="txtid" class="form-label">codigo</label>
                        <input type="number" required min="0" name="txtid" id="txtid" class="form-control">
                    </div>


                    <div class="mb-3">
                        <label for="txtnom" class="form-label">Nombre del producto</label>
                        <input type="text" required maxlength="100" name="txtnom" id="txtnom" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtprec" class="form-label">precio</label>
                        <input type="number" required min="0" name="txtprec" id="txtprec" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="txtstock" class="form-label">numero de unidades</label>
                        <input type="number" required min="0" name="txtstock" id="txtstock" class="form-control">
                    </div>

                    <hr>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                    <input type="reset" value="Limpiar" class="btn btn-secondary">
                    
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