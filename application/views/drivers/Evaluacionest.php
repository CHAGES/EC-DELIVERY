<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('barnav'); ?>

<div class="main--content">
    <div class="header--wrapper">
        <div class="header-title">
            <h2>Evaluación de Empresas</h2>
        </div>
        <div class="user--info">
            <img src="<?= base_url('assets/img/user.svg'); ?>" alt="">
        </div>
    </div>
    
    <div class="container-fluid mt-5" style="background-color: white; border-radius: 5px;">
        <br>
    <!-- Lista de Empresas Evaluadas -->
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                <h5>XYZ Logística</h5>
                <p>Calificación: 4.5/5</p>
                <button class="btn btn-primary">Calificar</button>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <h5>ABC Transportes</h5>
                <p>Calificación: 4.0/5</p>
                <button class="btn btn-primary">Calificar</button>
            </a>
        </div>
        <br>
    </div>
        
</div>
</body>
</html>