<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
        <?php include("menu.php"); ?>
        
        <h3>actualizar producto de usuarios</h3>
        
        <?php
                    $bd = conectar();
                    $produ = $_POST["txtid"];
                    $tipob=$_POST["opt"];
                    if($tipob=='C'){
                        $sql = "select  idPr,nombrePr,precioPr,stock from productos where idPr = '$produ' ";
        
                    }else {
                        $sql = "select  idPr,nombrePr,precioPr,stock from productos where nombrePr = '$produ' ";
        
                    }
                    $datos = mysqli_query($bd,$sql);
                    $arr = mysqli_fetch_array($datos);
        ?>
        <hr>
        <div class="row">
            <div class="col-6">
                <form action="modificar_producto4.php" method="post">
                    <div class="mb-3">
                        <label for="txtid" class="form-label">codigo</label>
                        <?php
                          echo"<input type='number' required min='0' name='txtid' id='txtid' readonly class='form-control' value='$arr[0]'>";
                        ?>
                    </div>


                    <div class="mb-3">
                        <label for="txtnom" class="form-label">Nombre del producto</label>
                        <?php
                       
                          echo "<input type='text'  readonly required maxlength='100' name='txtnom' id='txtnom' class='form-control' value='$arr[1]'>";
                          ?>
                    </div>
                    <div class="mb-3">
                        <label for="txtprec" class="form-label">precio</label>
                        <?php
                               echo " <input type='number' required min='0' name='txtprec' id='txtprec' class='form-control' value='$arr[2]'>";
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="txtstock" class="form-label">numero de unidades</label>
                        <?php
                            echo "<input type='number'  readonly required min='0'name='txtstock' id='txtstock' class='form-control' value='$arr[3]'>";
                        ?>
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