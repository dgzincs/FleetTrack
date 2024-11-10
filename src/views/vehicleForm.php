<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h4"><i class="bi bi-car-front me-2"></i> Veículo</h1>
</div>

<div class="table-responsive">
    <h1 class="h4 me-2">Cadastrar Veículo</h1>
    <form action="<?= $relativePath . 'src\controllers\vehicleClass.php' ?>" method="POST" class="mb-5">

        <div class="mb-3">
            <label for="model" class="form-label">Modelo</label>
            <input type="text" class="form-control" id="model" name="model" required>
        </div>

        <div class="mb-3">
            <label for="plate" class="form-label">Placa</label>
            <input type="text" class="form-control" id="plate" name="plate" required>
        </div>

        <div class="mb-3">
            <label for="code" class="form-label">Código</label>
            <input type="text" class="form-control" id="vehicleCode" name="vehicleCode" required>
        </div>

        <div class="mb-3">
            <label for="year" class="form-label">Ano</label>
            <input type="text" step="0.01" class="form-control" id="year" name="year" required>
        </div>

        <div class="mb-3">
            <label for="kilometer" class="form-label">Kilometragem</label>
            <input type="number" step="0.01" class="form-control" id="kilometer" name="kilometer" required>
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
                <th>Ano</th>
                <th>Kilometragem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
             <?php
                $result = $dbConnection->query("SELECT * FROM tb_vehicles");
                while ($row = $result->fetch_assoc()) {
                    echo "
                        <tr>
                            <form action='" . $relativePath . "src/controllers/vehicleClass.php' method='POST'>
                                <td>
                                    {$row['model']}
                                </td>
                                <td>
                                    {$row['plate']}
                                </td>
                                <td>
                                    {$row['vehicleCode']}
                                </td>
                                <td>
                                    {$row['year']}
                                </td>
                                <td>
                                    {$row['kilometer']}
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
