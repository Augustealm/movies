<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Filmai</title>

    <!-- Bootstrap core CSS -->
    <link href="templates/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="templates/css/simple-sidebar.css" rel="stylesheet">
    <link href="templates/css/style.css" rel="stylesheet">

</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <?php require 'C:/xampp/htdocs/movies/templates/main/_partials/side-nav.php' ;?>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <?php require 'C:/xampp/htdocs/movies/templates/main/_partials/header.php';?>

        <div class="container-fluid">
            <?php
            require $_SERVER["DOCUMENT_ROOT"].'/movies/router.php';
            ?>
        </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Bootstrap core JavaScript -->
<script src="templates/js/jquery.min.js"></script>
<script src="templates/js/bootstrap.bundle.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

</body>

</html>

