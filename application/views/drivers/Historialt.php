<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('barnav'); ?>

<div class="main--content">
    <div class="header--wrapper">
        <div class="header-title">
            <h2>Historial de Transportes Realizados</h2>
        </div>
        <div class="user--info">
            <img src="<?= base_url('assets/img/user.svg'); ?>" alt="">
        </div>
    </div>
        <div class="container-fluid mt-5" style="background-color: white; border-radius: 5px;">
            <br>
            <!-- Tabla de Transportes Realizados -->
            <table class="table table-striped mt-3">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Empresa</th>
                        <th>Fecha</th>
                        <th>Ruta</th>
                        <th>Estado de Pago</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>XYZ Logística</td>
                        <td>10/09/2024</td>
                        <td>Ciudad A - Ciudad B</td>
                        <td>Pagado</td>
                        <td><button class="btn btn-info">Ver Detalle</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ABC Transportes</td>
                        <td>05/09/2024</td>
                        <td>Ciudad C - Ciudad D</td>
                        <td>Pendiente</td>
                        <td><button class="btn btn-info">Ver Detalle</button></td>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
</div>
</body>
</html>