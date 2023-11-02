<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
        <?php include("menu.php"); ?>
        <h3>modificar producto</h3>
        <hr>
        <div class="row">
            <div class="col-6">
                <form action="modificar_producto2.php" method="post">
                    <div class="mb-3">
                        <label for="txtid" class="form-label">ingrese </label>
                        <input type="text" required min="0" name="txtid" id="txtid" class="form-control">
                    </div>

                    <hr>
                    <div class="mb-3">
                        <label class="form-label">tipo de busqueda</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="opt" id="opt1" required value="C">
                            <label class="form-check-label" for="opt1">
                                codigo del producto
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="opt" id="opt2" checked value="N">
                            <label class="form-check-label" for="opt2">
                                 nombre del producto
                            </label>
                        </div>
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