<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<?php $this->load->view('barnav'); ?>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header-title">
                <h2>Ofertas de Transporte Disponibles</h2>
            </div>
            <div class="user--info">
                <img src="<?= base_url('assets/img/user.svg'); ?>" alt="">
            </div>
        </div>
        
        <div class="container-fluid mt-5" style="background-color: white; border-radius: 5px;">
            <br>
            <div class="row mb-3">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar por tipo de carga">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar por destino">
                </div>
                <div class="col-md-4">
                    <button class="btn btn-success btn-block">Buscar</button>
                </div>
            </div>
        
        
            <!-- Lista de Ofertas -->
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">
                    <h5>Oferta de Transporte #1</h5>
                    <p>Empresa: ABC Transportes</p>
                    <p>Ruta: Ciudad A - Ciudad B</p>
                    <p>Precio: $1,500</p>
                    <button class="btn btn-success">Aceptar Oferta</button>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <h5>Oferta de Transporte #2</h5>
                    <p>Empresa: DEF Logística</p>
                    <p>Ruta: Ciudad C - Ciudad D</p>
                    <p>Precio: $2,000</p>
                    <button class="btn btn-success">Aceptar Oferta</button>
                </a>
            </div>
            <br>
        </div>
    </div>
</body>
</html>