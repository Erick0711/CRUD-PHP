
<?php require($_SERVER['DOCUMENT_ROOT']."/CRUD-php/App/Data/edit.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="icon" href="public/img/crud.png">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- ESTILOS CSS -->
    <link rel="stylesheet" href="./public/css/style.css">
    <!-- BOXICON -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container d-flex flex-column w-80 vh-100 d-flex justify-content-center align-items-center">
        <div class="container-editar">
   <form action="./edit.php" autocomplete="off" method="POST">
                    <h2 class="text-center text-white">Editar Usuario</h2> 
                    <input type="hidden" value="<?php echo $id?>" name="id">
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="<?php echo $nombre?>" name="nombre">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="<?php echo $apellido?>" name="apellido">
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="<?php echo $pais?>" name="pais">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" value="<?php echo $nivelEquipo?>" name="nivel_equipo">
                        </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-md-6">
                                <input type="text" class="form-control" value="<?php echo $codigo?>" name="codigo">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" value="<?php echo $correo?>" name="correo">
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-12 text-center">
                                <input type="submit" name="guardar" class="btn btn-primary btn-block" value="Guardar">
                            </div>
                        </div>
                </form>
                </div>
                </div>
     <!-- SCRIPT BOOTSTRAP -->
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <!-- SCRIPT PAGINADOR -->
    <script src="./public/js/script.js"></script>
    <!-- SCRIPT DE BUSCADOR -->
    <script src="./public/js/search.js"></script>
</body>

</html>