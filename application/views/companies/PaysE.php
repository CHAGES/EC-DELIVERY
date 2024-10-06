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
            <h2 class="text-center" style="color: #00D6C0;">Gestión de Pagos y Facturación</h2>
        <!-- Resumen de Gastos -->
        <div class="card mb-4">
            <div class="card-header">Resumen de Gastos</div>
            <div class="card-body">
                <p>Gastos Totales: $20,000</p>
                <p>Gastos del Mes: $3,500</p>
            </div>
        </div>
        <!-- Lista de Facturas -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Transportista</th>
                    <th>Monto</th>
                    <th>Fecha de Emisión</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Transportista XYZ</td>
                    <td>$1,500</td>
                    <td>10/09/2024</td>
                    <td>Pagado</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Transportista ABC</td>
                    <td>$2,000</td>
                    <td>05/09/2024</td>
                    <td>Pendiente</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>