<header>
    <div class="left">
        <div class="izquierda">
            <a href="../Inicio/inicio.php">
                <img src="../logoBilleteArnau.png" alt="">
            </a>    
        </div>
    </div>

    <h1 class="titulo" id="cabeza">Beat Pass</h1>
    
    <div class="rigth">
        <div class="idioma-selector">
            <select onchange="window.location.href=this.value">
                <option value="../Inicio/inicio.php" selected>Español</option>
                <option value="../Inicio/inicio_cat.php">Català</option>
                <option value="../Inicio/inicio_en.php">English</option>
            </select>
        </div>
        <!-- Posivilidades dentro de la web -->
        <a href="../eventos/Eventos.php">Eventos</a>
        <a href="../lugares/Lugares.php">Lugares</a>
        <!-- <button onclick="cuentaBtn()" name="cuenta" id="cuenta">cuenta prueba</button> Eliminada clase button, estilo general para buttons button -->
        <a href="#" onclick="cuentaBtn()" id="cuenta">Cuenta</a>
        <a href="../Inicio/inicio.php">Inicio</a>     
        <!-- <a href="../Cuenta/cuenta.php">Cuenta</a>  -->
    </div>
</header>