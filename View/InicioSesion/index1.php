<!DOCTYPE html>
<html lang="es">

<head>
    <!-- METADATOS Y ENLACES IMPORTANTES -->
    
    <!-- Enlace a Bootstrap para usar su sistema de estilos rápidos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Configuración de caracteres y vista para móviles -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Título que se muestra en la pestaña del navegador -->
    <title>Beat Pass - Inicio de Sesión</title>

    <!-- Ícono pequeño que aparece en la pestaña del navegador -->
    <link rel="icon" type="image/png" href="../logoBilleteArnau.png">

    <!-- Enlace a nuestro archivo de estilos personalizados -->
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="../headerComun.css">
    <link rel="stylesheet" href="../FooterComun.css">

    <!-- Enlace a las fuentes externas de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@400;600&family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <!-- CABECERA de la página -->
    <header>
        <h1 class="titulo">Beat Pass</h1>
    </header>

    <!-- CONTENIDO PRINCIPAL -->
    <main>
        <div class="container">
            <!-- Sección izquierda (Título) -->
            <div class="left-section">
                <h1 class="titulo">Inicio de Sesión</h1>
            </div>

            <!-- Formulario de Inicio de Sesión -->
            <form action="../../Controler/UserController.php" method="POST">
                <div class="input-group">
                    <label for="email">Correo electrónico:</label> <!-- Eliminadas clases info y subtitulo, el estilo viene de .input-group label -->
                    <input type="email" id="email" name="email" placeholder="tu@email.com" required>
                </div>

                <div class="input-group">
                    <label for="password">Contraseña:</label> <!-- Eliminadas clases info y subtitulo -->
                    <input type="password" id="password" name="password" placeholder="Tu contraseña" required>
                </div>

                <div class="buttons">
                    <button type="submit" name="Login" id="Login">Iniciar Sesión</button> <!-- Eliminada clase button, estilo general para buttons button -->
                    <a href="../Registro/Registro.php">
                        <button type="button" id="IrRegister" name="IrRegister" class="button-secondary">Registrarme</button> <!-- Clase para estilo secundario -->
                    </a>
                </div>
            </form>
        </div>
    </main>
  
</body>

</html>
