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
        <h3>Registro de formulas médicas</h3>
        <hr>
        <div class="row">
            <div class="col-6">

                <form action="add_formula2.php" method="post">
                    <div class="mb-3">
                        <label for="lstusu" class="form-label">Seleccione usuario</label>
                        <select name="lstusu" class="form-select">
                            <?php
                            $sql = "select nomusu, cedusu from usuarios order by nomusu";
                            $datos = mysqli_query($bd, $sql);
                            while ($arr = mysqli_fetch_array($datos)) {
                                echo "<option value='$arr[1]'>$arr[0]</option>";
                            }
                            ?>
                        </select>               
                    </div>

                    <div class="mb-3">
                        <label for="txtmed" class="form-label">Medicamento</label>
                        <input type="text" required maxlength="200" name="txtmed" id="txtmed" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="txtdos" class="form-label">Dosis</label>
                        <input type="text" required maxlength="100" name="txtdos" id="txtdos" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="txtfec" class="form-label">Fecha de Expiración</label>
                        <input type="date" required name="txtfec" id="txtfec" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="txthor" class="form-label">Hora de tratamiento</label>
                        <input type="time" required name="txthor" id="txthor" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="lstest" class="form-label">Estado</label>
                        <select name="lstest" id="lstest" class="form-select">
                            <option>Pendiente</option>
                            <option>Asignado</option>
                        </select>
                    </div>

                    <hr>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                    <input type="reset" value="Limpiar" class="btn btn-secondary">
                    
                    <?php
                        mysqli_close($bd);
                    ?>
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