<?php include "includes/header.php"; ?>

<?php 

if (isset($_POST['nuevo_user'])) {
    $user = $_POST['user'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];
    $tipo = 2;

    add_user($user,$pass1,$tipo);
}

?>
<?php 
    if ($_SESSION['tipo_u'] == '1') {
?>

<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDMYPE</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body >

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
              
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                    </a>
                    <form action="includes/barraSuperior.php" method="post">
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="includes/logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </header><!-- /header -->

    <div class="row"> <!--  row logo  -->
        <div class="col-md-6 ">
            <div class="card">
                <div class="card-header"><strong>Datos de la empresa</strong>
                    <small> -Datos-</small>
                </div>
                <div class="card-body card-block">
                    <div class="form-group">
                        <img src="images/admin.jpg" alt="">
                        <input type="file" name="image">
                    </div>
                    <div class="form-group">
                        <label for="nombre" class=" form-control-label">Nombre de la empresa</label>
                        <input type="text" id="nombre" placeholder="Nombre" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="direccion" class=" form-control-label">Dirección de la empresa</label>
                        <input type="text" id="direccion" placeholder="Direccion" class="form-control">
                    </div>

                    <!-- boton de agregar -->
                    <div class="row">
                        <div class="col-lg-6 offset-md-3 mr-auto ml-auto">
                            <button type="button" class="btn btn-success btn-lg btn-block">Modificar
                            </button>
                        </div>
                    </div><!-- row -->

                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="mx-auto d-block">
                        <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">
                        <h5 class="text-sm-center mt-2 mb-1">Nombre de la empresa</h5>
                        <div class="location text-sm-center"><i class="fa fa-map-marker"></i>Santa Ana, El Salvador</div>
                    </div>
                    <hr>
                    <div class="card-text text-sm-center">

                    </div>
                </div>
                <div class="card-footer">
                    <strong class="card-title mb-3">Datos de la empresa</strong>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6 ">
            <div class="card">
                <div class="card-header"><strong>Usuario nuevo</strong>
                    <small> -Propietario de la empresa-</small>
                </div>
                <div class="card-body card-block">

                    <div class="login-form">
                        <form id="agg_usuario" action="usuarios.php" method="POST">
                            <div class="form-group">
                                <label>Nombre de usuario</label>
                                <input name="user" type="text" class="form-control" placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <label>Contrasena</label>
                                <input name="pass1" type="password" class="form-control" placeholder="Contrasena">
                            </div>
                            <div class="form-group">
                                <label>Contrasena</label>
                                <input name="pass2" type="password" class="form-control" placeholder="Repita la Contrasena">
                            </div>
                            <button type="submit" name="nuevo_user" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
<?php 
    } else {
?>
    <!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CDMYPE</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body style="padding: 20px">
    <h1>No tienes permiso para estar aquí!</h1>
</body>
<?php 
    }
?>