<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleetTrack - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="img/FleetTrack-Logo.webp">
    <style>
        body {
            overflow: hidden;
        }
        .sidebar {
            background-color: #0b1a2b;
            min-height: 100vh;
            transition: width 0.3s;
        }
        .sidebar .nav-link {
            color: #adb5bd;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            color: #ffffff;
            background-color: #495057;
        }
        .content {
            padding: 20px;
            overflow-y: auto;
            height: 100vh;
        }

        .profile-icon-text{
            display: none;
        }

        .profile-icon:hover {
            cursor: not-allowed;
        }

        .profile-icon:hover .profile-icon-text {
            display: block;
            position: absolute;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <nav class="sidebar col-md-2 d-none d-md-block text-white">
            <div class="text-center my-4">
                <img src="img/FleetTrack-Logo.webp" alt="FleetTrack Logo" class="img-fluid" style="max-width: 150px;">
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="index.php?menu=index" class="nav-link">
                        <i class="bi bi-house me-2"></i> Início
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?menu=maintence" class="nav-link">
                        <i class="bi bi-tools me-2"></i> Manutenção
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?menu=fuel" class="nav-link">
                        <i class="bi bi-fuel-pump me-2"></i> Abastecimento
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?menu=stock" class="nav-link">
                        <i class="bi bi-box me-2"></i> Estoque
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php?menu=vehicle" class="nav-link">
                        <i class="bi bi-car-front me-2"></i> Veículo
                    </a>
                </li>
                <li class="nav-item mt-auto">
                    <a href="index.php?menu=404" class="nav-link profile-icon">
                        <i class="bi bi-box-arrow-right me-2" ></i> Sair
                        <div class="profile-icon-text">Função indisponível.</div>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="content flex-grow-1">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="">FleetTrack</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link profile-icon" href="">
                                    <i class="bi bi-person-circle me-1"></i> Perfil
                                    <div class="profile-icon-text">Função indisponível.</div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?=

            require_once ('..\src\config\config.php'); include_once $basePath . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'routes.php';
            ?>
        </div>
</body>
</html>
