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
        
            
        <div class="row">
            <!-- Perfil de la Empresa -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Perfil de la Empresa</div>
                    <div class="card-body">
                        <img src="empresa.jpg" class="img-fluid rounded mb-3" alt="Empresa">
                        <h5>Nombre de la Empresa</h5>
                        <p>Sector: Logística y Transporte</p>
                        <p>Contacto: +1 234 567 890</p>
                    </div>
                </div>
            </div>
            <!-- Estadísticas -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-header">Solicitudes Activas</div>
                            <div class="card-body">
                                <h4>12</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-header">Transportes Completados</div>
                            <div class="card-body">
                                <h4>45</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card text-center">
                            <div class="card-header">Gastos Totales</div>
                            <div class="card-body">
                                <h4>$20,000</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Accesos Rápidos -->
                <div class="card mt-4">
                    <div class="card-header">Accesos Rápidos</div>
                    <div class="card-body">
                        <button class="btn btn-primary">Crear Solicitud de Transporte</button>
                        <button class="btn btn-secondary">Historial de Transportes</button>
                        <button class="btn btn-success">Gestión de Pagos</button>
                    </div>
                </div>
            <br>
        </div>
    </div>

</body>
</html>
