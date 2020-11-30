<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/estilos.css">
        <!-- Bootstrap core CSS -->
        <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/product.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/navbarexamples.css" rel="stylesheet">
</head>
<body>

    <?php
        include 'includes/menu.php'
    ?>

    <div class="container">
 
        <h3>Registrar Usuario</h3>
        <hr>
        <form action="controller/guardarusuarios.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Rut</label>
                <input type="text" name="rut" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

              

         
            <label for="exampleInputEmail2">Nombres</label>
                <input type="text" name="nombres" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp">
            </div>

            


            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        







    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>
</html>