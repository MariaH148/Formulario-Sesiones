<!DOCTYPE Html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <Title> Registro de pacientes</Title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= ROOT ?>/index.php">Sesiones virtuales</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
 <!--        <a class="nav-link active" href="<?= ROOT ?>/index.php">Ver fechas disponibles</a> -->
        <a class="nav-link" href="<?= ROOT ?>/registropacientes/add.php">Agendar sesión</a> <!-- CONTACTENOS O REGISTRO -->
        <a class="nav-link" href="<?= ROOT ?>/registropacientes/index.php">Ver usuarios</a>
      </div>
    </div>
  </div>
</nav>