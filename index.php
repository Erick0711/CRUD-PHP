<?php require($_SERVER['DOCUMENT_ROOT']."/CRUD-php/App/Data/mostrar.php"); ?>

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

    <div class="container d-flex flex-column w-100 vh-100 d-flex justify-content-center align-items-center">
        <h1 class="text-center">REGISTROS DE USUARIOS</h1>
        <a href="./registro.php"><i class='bx bxs-user-plus bx-lg'></i></a>
        <table class="table text-center table-bordered mt-4" id="tblDatos">
            <thead class="table-primary">
                <tr>
                    <th>ID</th>
                    <th>CODIGO</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>PAIS</th>
                    <th>NIVEL DE EQUIPO</th>
                    <th>CORREO</th>
                    <th>FUNCIONES</th>
                </tr>
            </thead>
            <tbody class="table-dark">
                <?php foreach($mostrarTodos as $mostrar){
                    if($mostrar['estado'] == 1){
                    ?>
                <tr>
                    <td><?php echo $mostrar['id'];?></td>
                    <td><?php echo $mostrar['codigo'];?></td>
                    <td><?php echo $mostrar['nombre'];?></td>
                    <td><?php echo $mostrar['apellido'];?></td>
                    <td><?php echo $mostrar['pais'];?></td>
                    <td><?php echo $mostrar['nivel_de_equipo'];?></td>
                    <td><?php echo $mostrar['correo'];?></td>
                    <td>
                    <a href="./edit.php?edit=<?php echo $mostrar['id']?>" name="edit" class="btn btn-warning" ><i class='bx bxs-pencil'></i></a>

                        <a href="./App/Data/delete.php?borrar=<?php echo $mostrar['id']?>" class="btn btn-danger" name="borrar" id="borrar"><i class='bx bxs-trash-alt'></i></a>
                    </td>
                </tr>
            <?php }
        };?>
            </tbody>
        </table>
        
        <div class="container-fluid d-flex justify-content-center align-item-center w-100">
            <div class="" id="paginador"></div>
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