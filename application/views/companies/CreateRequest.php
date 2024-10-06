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
            <h2 class="text-center" style="color: #00D6C0;">Creación de Solicitudes de Transporte</h2>
        <!-- Formulario de Solicitud de Transporte -->
        <form>
            <div class="form-group">
                <label for="tipoCarga">Tipo de Carga</label>
                <input type="text" class="form-control" id="tipoCarga" placeholder="Ej: Perecederos">
            </div>
            <div class="form-group">
                <label for="origen">Origen</label>
                <input type="text" class="form-control" id="origen" placeholder="Ciudad de Origen">
            </div>
            <div class="form-group">
                <label for="destino">Destino</label>
                <input type="text" class="form-control" id="destino" placeholder="Ciudad de Destino">
            </div>
            <div class="form-group">
                <label for="precio">Precio Ofrecido</label>
                <input type="number" class="form-control" id="precio" placeholder="Precio en USD">
            </div>
            <button type="submit" class="btn btn-success btn-block">Crear Solicitud</button>
        </form>
    </div>
</body>
</html>