<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('barnav'); ?>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header-title">
                <h2>Dashboard</h2>
            </div>
            <div class="user--info">
                <img src="<?= base_url('assets/img/user.svg'); ?>" alt="">
            </div>
        </div>
        
        <div class="container-fluid mt-5" style="background-color: white; border-radius: 5px;">
            <br>
            <h2 class="text-center" style="color: #00D6C0;">Sistema de Evaluación de Transportistas</h2>
        <!-- Lista de Transportistas Evaluados -->
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action">
                <h5>Transportista XYZ</h5>
                <p>Calificación: 4.5/5</p>
                <button class="btn btn-primary">Calificar</button>
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                <h5>Transportista ABC</h5>
                <p>Calificación: 4.0/5</p>
                <button class="btn btn-primary">Calificar</button>
            </a>
        </div>
    </div>
</body>
</html>