<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("head.php") ?>
</head>

<body>
    <div class="container">
        <?php include("menu.php"); 
        include("conecta.php");
        $bd = conectar();
        $ced = $_POST["lstusu"];
        $sql= "select  cedusu,nomusu,genusu,fecnac,telusu,epicrisis from usuarios where cedusu = '$ced' order by nomusu";

        $datos = mysqli_query($bd,$sql);

        $arr = mysqli_fetch_array($datos)

        ?>

        <h3>Registro de usuarios</h3>
        <hr>
        <div class="row">
            <div class="col-6">
                <form action="add_user2.php" method="post">
                    <div class="mb-3">
                      
                        
                        <label for="txtced" class="form-label">Cedula del paciente</label>
                        <?php  
                        echo" <input type='number' required min='0' name='txtced' id='txtced' class='form-control' disabled value='$arr[0]'>";
                        ?>
                    </div>

                    <div class="mb-3">

                        
                        <label for="txtnom" class="form-label">Nombres completos del paciente</label>
                        <?php
                        echo"<input type='text' required maxlength='100' name='txtnom' id='txtnom' class='form-control'  value='$arr[1]'>";          
                        ?>
                    </div>

                    <div class="mb-3">


                        <label class="form-label">Género</label>
                        
                            <div class="form-check">
                            <?php
                            if($arr[2]=="M"){  
                             echo"<input class='form-check-input' type='radio' name='optgen' id='optgen1'  checked required value='M'>";
                            }else{
                                echo"<input class='form-check-input' type='radio' name='optgen' id='optgen1' required value='M'>";
                            }
                           ?>
                            <label class="form-check-label" for="optgen1">
                                Masculino
                            </label>
                        </div>
                        <div class="form-check">
                            <?php
                            if($arr[2]=="F"){  
                                echo"<input class='form-check-input' type='radio' name='optgen' id='optgen2' checked value='F'>";
                            }else{
                                echo"<input class='form-check-input' type='radio' name='optgen' id='optgen2'  value='F'>";

                            }
                           
                            ?>
                            <label class="form-check-label" for="optgen2">
                                Femenino
                            </label>
                        </div>"
                       
                    </div>


                    <div class="mb-3">
                        <label for="texfec" class="form-label">Fecha de nacimiento</label>
                        <?php

                            echo"<input type='date' required name='txtfec' id='txtfec' class='form-control' value='$arr[3]'>";

                        ?>
                    </div>

                    <div class="mb-3">
                        <label for="textel" class="form-label">Teléfono</label>
                        <?php
                         echo"<input type='number' required name='txttel' id='txttel' class='form-control' value='$arr[4]'>";
                        ?>
                    </div>

                    <div class="mb-3">
                        <label for="txtepi" class="form-label">Epicrisis</label>
                        <?php
                           echo"<textarea class='form-control' name='txtepi' id='txtepi' required >$arr[5]</textarea>";
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