<<<<<<< HEAD
<div class="container mt-5">
    <h2>Iniciar Sesión</h2>
    <?php if (!empty($error)) : ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <div class="login-container">
        <div class="login-card">
            <div class="login-image">
                <img src="../../public/assets/img/foto-login.jpg" alt="Imagen decorativa">
            </div>
            <form class="login-form" action="<?= URL_PATH ?>/page/autenticar" method="POST">
                <h2>Iniciar Sesión</h2>
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" id="nombreUsuario" name="nombreUsuario" placeholder="Ingresa tu usuario" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña" required>
                </div>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>
=======
<div class="container mt-5">
    <h2>Iniciar Sesión</h2>
    <?php if (!empty($error)) : ?>
        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <div class="login-container">
        <div class="login-card">
            <div class="login-image">
                <img src="../../public/assets/img/foto-login.jpg" alt="Imagen decorativa">
            </div>
            <form class="login-form" method="POST" action="<?= URL_PATH ?>/page/autenticar">
                <h2>Iniciar Sesión</h2>
                <div class="form-group">
                    <label for="username">Usuario</label>
                    <input type="text" id="nombreUsuario" name="nombreUsuario" placeholder="Ingresa tu usuario" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Ingresa tu contraseña" required>
                </div>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>
>>>>>>> 3a3aa64 (Aplicación Web con herramientas digitales: Kahoot, Scratch, Podcast, App Inventor y un Agente Inteligente)
</div>