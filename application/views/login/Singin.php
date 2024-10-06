<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Registro de Empresas y Transportistas</title>
    <style>
        body {
            background-color: #ffffff;
        }
        .btn-primary {
            background-color: #00D6C0;
            border-color: #00D6C0;
        }
        .btn-primary:hover {
            background-color: #00B3A4;
            border-color: #00B3A4;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center" style="color: #00D6C0;">Registro</h2>
        <!-- Formulario de Registro -->
        <form>
            <div class="form-group">
                <label for="tipoUsuario">Tipo de Usuario</label>
                <select class="form-control" id="tipoUsuario">
                    <option>Empresa</option>
                    <option>Transportista</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre de la Empresa/Transportista">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico</label>
                <input type="email" class="form-control" id="email" placeholder="Ej: correo@ejemplo.com">
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" placeholder="Contraseña">
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirmar Contraseña</label>
                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirmar Contraseña">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
        </form>
    </div>
</body>
</html>
