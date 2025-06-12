<?php

require_once "../../Controler/UserController.php";

$email = $_SESSION["email"] ?? null;

if (!$email) {
    header("Location: ../InicioSesion/index1.php");
    exit;
}

$userController = new UserController();

// Declarar variables por defecto
$nameN = "";
$password = "";
$imagen = null;

// Solo procesar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nameN = trim($_POST["nameN"]);
    $phone = trim($_POST["phone"]);
    $password = trim($_POST["password"]) ?: null;
    $imagen = $_FILES["imagen"] ?? null;

    if ($userController->update($email, $nameN, $phone,$password, $imagen)) {
        $_SESSION["imagen"] = $imagen["name"] ?? $_SESSION["imagen"];
        header("Location: ../Cuenta/cuenta.php");
        exit;
    } else {
        echo "Error al actualizar los datos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beat Pass - Cuenta</title>
    <link rel="icon" type="image/png" href="../logoBilleteArnau.png">
    <link rel="stylesheet" href="StyleC.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@400;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../headerComun.css">
</head>
<body>
    <div class="formulario">
        <h2>Actualizar tus datos</h2>

        <?php if ($imagen && isset($imagen["name"])): ?>
            <p><strong>Imagen actual:</strong></p>
            <img src="../../uploads/<?= htmlspecialchars($imagen["name"]) ?>" alt="Imagen de perfil">
        <?php endif; ?>

        <form action="procesarUpdate.php" method="post" enctype="multipart/form-data">
            <label for="nameN">Nombre de usuario:</label>
            <input type="text" name="nameN" id="nameN" value="<?= htmlspecialchars($nameN) ?>" required>
            <label for="phone">Numero de telefono:</label>
            <input type="tel" name="phone" id="phone" value="<?= htmlspecialchars($phone) ?>" required>

            <label for="email">Correo electrónico (no editable):</label>
            <input type="email" name="email" id="email" value="<?= htmlspecialchars($email) ?>" readonly>

            <label for="password">Nueva contraseña:</label>
            <input type="password" name="password" id="password" placeholder="Déjalo vacío si no deseas cambiarla">

            <label for="imagen">Cambiar imagen de perfil:</label>
            <input type="file" name="imagen" id="imagen" accept="image/*">

            <input type="submit" value="Guardar cambios">
        </form>
    </div>
</body>
</html>
