<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('header'); ?>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/icon.png')?>" alt="Logo EC-DELIVERY"></a>
  <a class="navbar-brand" href="#">EC-DELIVERY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/index.php/login')?>">Log In</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Sección principal - Landing Page -->
<div class="container-fluid">
  <div class="container mt-5 landing-container">
    <h1 class="landing-title">Bienvenido a EC-DELIVERY</h1>
    <p class="landing-description">Somos una plataforma que enlaza a empresas que necesitan transportar sus productos de forma segura y eficiente con transportistas capacitados para hacerlo.</p>
    <a href="<?= base_url('/index.php/login')?>" class="btn btn-secondary landing-button">Registrarse como Transportista</a>
    <a href="<?= base_url('/index.php/login')?>" class="btn btn-secondary landing-button">Registrarse como Empresa</a>

    <!-- Características destacadas -->
    <div class="features">
      <div class="feature">
        <h2 class="feature-title">Seguridad</h2>
        <p class="feature-description">Tu información y envíos están protegidos con los más altos estándares de seguridad.</p>
      </div>
      <div class="feature">
        <h2 class="feature-title">Rastreo en Tiempo Real</h2>
        <p class="feature-description">Monitorea tus envíos en tiempo real y mantén informados a tus clientes.</p>
      </div>
      <div class="feature">
        <h2 class="feature-title">Asistencia 24/7</h2>
        <p class="feature-description">Nuestro equipo de soporte está disponible las 24 horas, los 7 días de la semana, para ayudarte en cualquier situación.</p>
      </div>
    </div>
  </div>
</div>

<?php $this->load->view('footer'); ?>
