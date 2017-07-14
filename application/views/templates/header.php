<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?Php echo base_url(); ?>/favicon.ico">

    <title>Examen .:: Aula Mejor ::.</title>

    <!-- Bootstrap core CSS -->
    <link href="<?Php echo base_url(); ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <script src="<?Php echo base_url(); ?>/assets/jquery/jquery-321.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-bottom">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?Php echo base_url(); ?>">Marco Ram&iacute;rez</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" id="form1">
            <div class="form-group">
              <input type="text" maxlength="50" placeholder="Nombre" id="txtNombre" class="form-control">
            </div>
            <div class="form-group">
              <input type="text" maxlength="50" placeholder="Correo" id="txtEmail" class="form-control">
            </div>
            <div class="form-group">
              <input type="text" maxlength="6" placeholder="Folio" id="txtFolio" class="form-control">
            </div>
            <div class="form-group">
              <input type="text" maxlength="100" placeholder="Compra" id="txtCompra" class="form-control">
            </div>
            <button type="button" class="btn btn-success" id="btnBuscar">Buscar</button>
            <button type="button" class="btn btn-warning" id="btnLimpiar">Limpiar</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1><?Php echo img('assets/imgs/logo.png'); ?> &nbsp;  &nbsp; Lista de compras</h1>
        
        <hr>

