<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4"><i class="bi bi-fuel-pump me-2"></i> Abastecimento</h1>
</div>

<div class="table-responsive">
    <h1 class="h4 me-2">Cadastrar Abastecimento</h1>
    <form action="<?= $relativePath . 'src\controllers\fuelClass.php' ?>" method="POST" class="mb-5">

        <input type="hidden" name="id" value="">

        <div class="mb-3">
            <label for="fuelStation" class="form-label">Estação de Combustível</label>
            <input type="text" class="form-control" id="location" name="location" required>
        </div>

        <div class="mb-3">
            <label for="vehicleCode" class="form-label">Código do Veículo</label>
            <input type="text" class="form-control" id="vehicleCode" name="vehicleCode" required>
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Quantidade (Litros)</label>
            <input type="number" step="0.01" class="form-control" id="quantity" name="quantity" required>
        </div>

        <div class="mb-3">
            <label for="materialCode" class="form-label">Código do Material</label>
            <input type="text" class="form-control" id="materialCode" name="materialCode" required>
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
                <th>Estação de Combustível</th>
                <th>Código do Veículo</th>
                <th>Quantidade</th>
                <th>Código do Material</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $result = $dbConnection->query("SELECT * FROM tb_fuels");
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                            <form action='" . $relativePath . "src/controllers/fuelClass.php' method='POST'>
                                <td>
                                    {$row['location']}
                                </td>
                                <td>
                                    {$row['vehicleCode']}
                                </td>
                                <td>
                                    {$row['quantity']}
                                </td>
                                <td>
                                    {$row['materialCode']}
                                </td>
                                <td>
                                    <!-- Botão para excluir -->
                                    <button type='submit' class='btn btn-sm btn-outline-danger' name='del_id' value='{$row['id']}'>
                                        <i class='bi bi-trash-fill'></i>
                                    </button>
                                </td>
                            </form>
                        </tr>
                    ";
                }
            ?>

        </tbody>
    </table>
</div>
