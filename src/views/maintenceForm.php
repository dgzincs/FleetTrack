<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4"><i class="bi bi-fuel-pump me-2"></i> Manutenção</h1>
</div>

<div class="table-responsive">
    <h1 class="h4 me-2">Cadastrar Manutenção</h1>
    <form action="<?= $relativePath . 'src\controllers\maintenceClass.php' ?>" method="POST" class="mb-5">
        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">

        <div class="mb-3">
            <label for="fuelStation" class="form-label">Modelo do Veículo</label>
            <input type="text" class="form-control" id="model" name="model" required>
        </div>

        <div class="mb-3">
            <label for="vehicleCode" class="form-label">Código do Veículo</label>
            <input type="text" class="form-control" id="vehicleCode" name="vehicleCode" required>
        </div>

        <div class="mb-3">
            <label for="registrationDate" class="form-label">Data da Ocorrência</label>
            <input type="date" class="form-control" id="registrationDate" name="registrationDate" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Inconformidade Constada</label>
            <input type="text" step="0.01" class="form-control" id="issue" name="quantity" required>
        </div>

        <button type="submit" class="btn btn-primary">
            <i class="bi bi-save me-1"></i> Salvar
        </button>
        <button type="reset" class="btn btn-secondary">
            <i class="bi bi-arrow-clockwise me-1"></i> Limpar
        </button>
    </form>

    <table class="table table-hover table-bordered">
        <thead class="table-dark">
            <tr>
                <th>Modelo</th>
                <th>Placa</th>
                <th>Código</th>
                <th>Quantidade</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Caminhão Basculante</td>
                <td>CVSD-132</td>
                <td>CB-01</td>
                <td>100</td>
                <td>10/10/2024</td>
                <td>
                    <a href="#" class="btn btn-sm btn-danger">
                        <i class="bi bi-trash me-1"></i>
                    </a>
                </td>
            </tr>
            <tr>
                <td>Caminhão Basculante</td>
                <td>CVSD-132</td>
                <td>CB-01</td>
                <td>100</td>
                <td>10/10/2024</td>
                <td>
                    <a href="#" class="btn btn-sm btn-danger">
                        <i class="bi bi-trash me-1"></i>
                    </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
