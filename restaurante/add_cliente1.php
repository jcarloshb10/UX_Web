<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
        <?php include("menu.php"); ?>
        <hr>
        <h3>Registro de clientes</h3>
        <hr>
        <div class="row">
            <div class="col-5">
                <form action="add_cliente2.php" method="post">
                    <div class="mb-3">
                        <label for="intced" class="form-label">Cedula del paciente</label>
                        <input type="number" required min="0" name="intced" id="intced" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="txtnom" class="form-label">Nombre completo</label>
                        <input type="text" required maxlength="100" name="txtnom" id="txtnom" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="textel" class="form-label">Teléfono</label>
                        <input type="text" required name="txttel" id="txttel" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="intalmuerzos" class="form-label">Número de almuerzos</label>
                        <input type="number" required min="1" name="intalmuerzos" id="intalmuerzos" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="intprecio" class="form-label">Precio almuerzo</label>
                        <input type="number" name="intprecio" id="intprecio" class="form-control">
                    </div>

                    <hr>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                    <input type="reset" value="Limpiar" class="btn btn-secondary">
                    
                </form>

            </div>

            <div class="col-5"></div>
        </div>
    </div>
    <!--fin contenedor-->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>