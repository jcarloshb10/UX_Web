<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
      <?php include("menu.php"); ?>
       <h3>Resultado de la inserción</h3>
        <?php

            $bd = conectar();
            $ced = $_POST["txtid"];
            $sql = "select  idreg,cedulaCl,nombresCl,apellidosCl,direccionCl,telefonoCl,correoCl from clientes where cedulaCl = '$ced' order by nombresCl";
            //echo $sql;
            $datos = mysqli_query($bd,$sql);
            $arr = mysqli_fetch_array($datos);



        ?>
            <div class="row">
            <div class="col-6">
                <form  action="modificar_cliente4.php" method="post">
                    <div class="mb-3">

                        <label for="txtidr" class="form-label" >id de registro</label>
                        <?php
                            echo "<input type='number' readonly required min='0' name='txtidr' id='txtidr' class='form-control' value='$arr[0]'>";
                        
                        ?>
                    </div>
                    <div class="mb-3">

                        <label for="txtced" class="form-label" >Cedula del paciente</label>
                        <?php
                            echo "<input type='number'  required min='0' name='txtced' id='txtced' class='form-control' value='$arr[1]'>";
                           
                        ?>
                    </div>

                    <div class="mb-3">
                        <label for="txtnom" class="form-label">Nombres completos </label>
                        <?php
                            echo "<input type='text'required maxlength='100' name='txtnom' id='txtnom' class='form-control' value ='$arr[2]'>";
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="txtapell" class="form-label">apellidos </label>
                        <?php
                            echo " <input type='text' required maxlength='100' name='txtapell' id='txtapell' class='form-control' value='$arr[3]'>";
                        
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="txtdirec" class="form-label">Dirección </label>
                        <?php
                            echo "<input type='text' required maxlength='100' name='txtdirec' id='txtdirec' class='form-control' value='$arr[4]'>";
                        ?>
                    </div>
                    
                    <div class="mb-3">
                        <label for="textel" class="form-label">Teléfono</label>
                        <?php

                            echo" <input type='number' required name='txttel' id='txttel' class='form-control' value='$arr[5]'>";
                        ?>
                    </div>
                    <div class="mb-3">
                        <label for="txtcorreo" class="form-label">correo </label>
                        <?php

                            echo "<input type='text' required maxlength='100' name='txtcorreo' id='txtcorreo' class='form-control' value='$arr[6]'>";
                        ?>
                    </div>

                    <hr>
                    <input type="submit" value="Guardar" class="btn btn-primary">
                    <input type="reset" value="restart" class="btn btn-secondary">
                    
                </form>

            </div>

            <div class="col-6"></div>
        </div>
        <?php
            mysqli_close($bd);
        ?>


    </div>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>