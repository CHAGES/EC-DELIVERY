<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8c6b62ec36.js" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/stylel.css'); ?>"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('assets/img/icon.png')?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/dashs.css'); ?>">
    
    <style type="text/css">
        
        .card-header {
            background-color: #00D6C0;
            color: white;
        }
        .btn-primary, .btn-secondary, .btn-success {
            background-color: #00D6C0;
            border-color: #00D6C0;
        }
        .btn-primary:hover, .btn-secondary:hover, .btn-success:hover {
            background-color: #00B3A4;
            border-color: #00B3A4;
        }
        
    </style>
    
</head>
<body>
    
    <div class="sidebar">
        <div class="logo"></div>
            <ul class="menu">
                <li class="<?php $dash; ?>">
                    <a href="<?= base_url('/index.php/transportista/index')?>">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <br>
                <li class="<?php $ofertas; ?>">
                    <a href="<?= base_url('/index.php/transportista/ofertas')?>">
                        <i class="fa-solid fa-tag"></i>
                        <span>Ofertas</span>
                    </a>
                </li>
                <br>
                <li class="<?php $hist; ?>">
                    <a href="<?= base_url('/index.php/transportista/historial')?>">
                        <i class="fas fa-chart-bar"></i>
                        <span>Historial</span>
                    </a>
                </li>
                <br>
                <li class="<?php $pagos; ?>">
                    <a href="<?= base_url('/index.php/transportista/pagos')?>">
                        <i class="fa-solid fa-money-check-dollar"></i>
                        <span>Pagos</span>
                    </a>
                </li>
                <br>
                <li class="<?php $eval; ?>">
                    <a href="<?= base_url('/index.php/transportista/evaluaciones')?>">
                        <i class="fa-solid fa-file-pen"></i>
                        <span>Evaluaciones</span>
                    </a>
                </li>
                <li class="logout">
                    <a href="<?= base_url('/index.php/login/logout')?>">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Log Out</span>
                    </a>
                </li>
            </ul>
    </div>
    
