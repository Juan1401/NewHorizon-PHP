<!-- views/frontpage.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body class="bg-light">

    <header class="bg-primary text-white text-center py-4">
        <h1>Bienvenido a la Página Principal</h1>
        <p class="lead">Gestión de Ingresos y Gastos</p>
    </header>

    <main class="container mt-5">
        <div class="text-center">
            <h2>¡Explora tus Finanzas!</h2>
            <p>Aquí puedes gestionar tus ingresos y gastos de manera sencilla.</p>
        </div>

        <!-- Botones de navegación a Ingresos y Gastos -->
        <div class="d-flex justify-content-center my-4">
            <a href="/incomes" class="btn btn-success mx-2">
                <i class="fas fa-coins"></i> Ver Ingresos
            </a>
            <a href="/withdrawals" class="btn btn-danger mx-2">
                <i class="fas fa-wallet"></i> Ver Gastos
            </a>
        </div>

        <!-- Dashboard o resumen de ingresos y gastos -->
        <div class="row mt-5">
            <div class="col-md-6 text-center">
                <h3>Total Ingresos</h3>
                <p>Consulta el balance de tus ingresos aquí.</p>
                <a href="/incomes" class="btn btn-primary">Ver Ingresos</a>
            </div>
            <div class="col-md-6 text-center">
                <h3>Total Gastos</h3>
                <p>Revisa los detalles de tus gastos aquí.</p>
                <a href="/withdrawals" class="btn btn-primary">Ver Gastos</a>
            </div>
        </div>
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; <?php echo date("Y"); ?> Gestión Financiera. Todos los derechos reservados.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
