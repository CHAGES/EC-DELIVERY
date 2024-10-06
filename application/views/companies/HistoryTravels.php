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
            <h2 class="text-center" style="color: #00D6C0;">Historial de Transportes</h2>
        <!-- Tabla de Historial de Transportes -->
        <table class="table table-striped mt-3">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Transportista</th>
                    <th>Fecha</th>
                    <th>Ruta</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Transportista XYZ</td>
                    <td>10/09/2024</td>
                    <td>Ciudad A - Ciudad B</td>
                    <td>Completado</td>
                    <td><button class="btn btn-info">Ver Detalle</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Transportista ABC</td>
                    <td>05/09/2024</td>
                    <td>Ciudad C - Ciudad D</td>
                    <td>En Progreso</td>
                    <td><button class="btn btn-info">Ver Detalle</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>