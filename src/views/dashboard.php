<?php
    require_once __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'config.php';
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4"><i class="bi bi-speedometer me-2"></i> Dashboard</h1>
</div>
<div class="table-responsive">
    <div class="row text-center">
        <div class="col-md-3">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">
                    <h5>Total de Veículos</h5>
                    <h3><?= $tbVehiclesCount; ?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">
                    <h5>Manutenções Pendentes</h5>
                    <h3><?= $tbMaintencesCount; ?></h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">
                    <h5>Trocas de Óleo Próximas</h5>
                    <h3>8</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">
                    <h5>Estoque Crítico</h5>
                    <h3>2 itens</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <h5>Últimas Atualizações</h5>
        <ul class="list-group mb-4">
            <li class="list-group-item">Manutenção registrada no veículo V123 - 02/10/2024</li>
            <li class="list-group-item">Novo veículo V789 cadastrado - 01/10/2024</li>
            <li class="list-group-item">Abastecimento realizado no veículo V456 - 30/09/2024</li>
        </ul>
    </div>
</div>
