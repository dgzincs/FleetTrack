<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4"><i class="bi bi-box me-2"></i> Estoque</h1>
</div>

<div class="table-responsive">
    <h1 class="h4 me-2">Cadastrar Estoque</h1>
    <form action="processa_abastecimento.php" method="POST" class="mb-5">

        <div class="mb-3">
            <label for="product" class="form-label">Produto</label>
            <input type="text" class="form-control" id="product" name="product" required>
        </div>

        <div class="mb-3">
            <label for="brand" class="form-label">Marca</label>
            <input type="text" class="form-control" id="brand" name="brand" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>

        <div class="mb-3">
            <label for="location" class="form-label">Localização</label>
            <input type="text" class="form-control" id="location" name="location" required>
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
 
