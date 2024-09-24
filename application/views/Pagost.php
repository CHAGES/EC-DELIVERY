<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('barnav'); ?>

<div class="main--content">
    <div class="header--wrapper">
        <div class="header-title">
            <h2>Gestión de Pagos y Facturación</h2>
        </div>
        <div class="user--info">
            <img src="<?= base_url('assets/img/user.svg'); ?>" alt="">
        </div>
    </div>

        <div class="container-fluid mt-5" style="background-color: white; border-radius: 5px;">
        
        <br>
            <!-- Resumen de Ingresos -->
            <div class="card mb-4">
                <div class="card-header">Resumen de Ingresos</div>
                <div class="card-body">
                    <p>Ingresos Totales: $12,500</p>
                    <p>Ingresos del Mes: $2,500</p>
                </div>
            </div>
            <!-- Lista de Facturas -->
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Empresa</th>
                        <th>Monto</th>
                        <th>Fecha de Emisión</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>XYZ Logística</td>
                        <td>$1,500</td>
                        <td>10/09/2024</td>
                        <td>Pagado</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>ABC Transportes</td>
                        <td>$2,000</td>
                        <td>05/09/2024</td>
                        <td>Pendiente</td>
                    </tr>
                </tbody>
            </table>
            <br>
        </div>
</div>
</body>
</html>