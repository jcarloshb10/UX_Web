<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
        <?php include("menu.php"); ?>
        <h3>Registro de tiquetera</h3>
        <hr>
        <div class="row">
            <div class="col-3">
                <form action="add_almuerzos2.php" method="post">
                    <div class="mb-3">
                        <label for="intced" class="form-label">Cedula del paciente</label>
                        <input type="number" name="intced" id="intced" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="dateing" class="form-label">Fecha de ingreso</label>
                        <input type="date" name="dateing" id="dateing" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="intstock" class="form-label">numero de unidades</label>
                        <input type="number" required min="1" name="intstock" id="intstock" class="form-control">
                    </div>

                    <hr>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                    <input type="reset" value="Limpiar" class="btn btn-secondary">
                    
                </form>

            </div>

            <div class="col-3"></div>
        </div>
    </div>
    <!--fin contenedor-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>