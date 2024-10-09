<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php $this->load->view('Barnav'); ?>

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
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header">Perfil del Transportista</div>
                        <div class="card-body">
                            <img src="<?= base_url('assets/img/user.svg'); ?>" class="img-fluid rounded-circle mb-2" alt="Perfil" style="height: 50px;">
                            <h5>Nombre del Transportista</h5>
                            <p>Empresa: XYZ Transportes</p>
                            <p>Contacto: +1 234 567 890</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-4">
                            <div class="card text-center">
                                <div class="card-header">Ofertas Aceptadas</div>
                                <div class="card-body">
                                    <h4>25</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card text-center">
                                <div class="card-header">Transportes Realizados</div>
                                <div class="card-body">
                                    <h4>18</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card text-center">
                                <div class="card-header">Ingresos Totales</div>
                                <div class="card-body">
                                    <h4>$12,500</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-4">
                <div class="card-header">Accesos Rápidos</div>
                <div class="card-body text-center">
                    <a href="<?= base_url('/index.php/drivers/ofertas')?>"><button class="btn btn-primary">Ver Ofertas Disponibles</button></a>
                    <a href="<?= base_url('/index.php/drivers/historial')?>"><button class="btn btn-secondary">Historial de Transportes</button></a>
                    <a href="<?= base_url('/index.php/drivers/pagos')?>"><button class="btn btn-success">Gestión de Pagos</button></a>
                    
                </div>
            </div>
            <br>
        </div>
    </div>

</body>
</html>
