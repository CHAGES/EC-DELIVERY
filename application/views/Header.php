<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EC-DELIVERY</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Estilos personalizados -->
  <link href="styles.css" rel="stylesheet">
  <link rel="shortcut icon" href="<?= base_url('/assets/img/favicon.png')?>" type="image/x-icon">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f9fa;
      position: relative;
    }

    .landing-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 50px 20px;
      text-align: center;
      position: relative;
      z-index: 1; /* Para asegurarnos de que el contenido esté encima de la imagen */
    }

    .landing-title {
      color: #00D6C0;
      font-size: 36px;
      margin-bottom: 20px;
    }

    .landing-description {
      color: #495057;
      font-size: 18px;
      margin-bottom: 30px;
    }

    .landing-button {
      display: inline-block;
      background-color: #00D6C0;
      color: white;
      padding: 10px 20px;
      font-size: 18px;
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s;
    }

    .landing-button:hover {
      background-color: #00b89c;
    }

    .features {
      display: flex;
      justify-content: space-around;
      margin-top: 50px;
    }

    .feature {
      flex: 1;
      padding: 20px;
      background-color: white;
      border-radius: 10px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin: 0 10px;
    }

    .feature-title {
      color: #00D6C0;
      font-size: 24px;
      margin-bottom: 10px;
    }

    .feature-description {
      color: #495057;
      font-size: 16px;
    }

    /* Estilos para la imagen */
    .landing-image {
      position: absolute;
      top: 20px;
      left: 20px;
      max-width: 300px;
      z-index: 0; /* Aseguramos que la imagen esté detrás del contenido */
    }

    .logo-container img {
      max-height: 40px;
    }

    .feature:hover {
      background-color: #757575;
      cursor: pointer; /* Cambia el color de fondo al pasar el cursor */
    }

    .feature:hover .feature-description{
      color: #f8f9fa;
    }
  </style>
</head>
<body>