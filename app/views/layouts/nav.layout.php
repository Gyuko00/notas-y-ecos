<<<<<<< HEAD
<nav class="navbar">
    <div class="navbar-container">
        <!-- Logo -->
        <a href="#" class="logo">
            <img src="../../public/assets/img/logo-moto.png" alt="Logo Mundo Motos">
        </a>

        <!-- Menú de navegación -->
        <ul class="nav-items">
            <li><a href="<?= URL_PATH ?>/user/home" class="nav-link">Home</a></li>
            <li><a href="<?= URL_PATH ?>/user/herramientas" class="nav-link">Herramientas</a></li>
            <li><a href="<?= URL_PATH ?>/user/contacto" class="nav-link">Contacto</a></li>
        </ul>

        <!-- Icono de Menú (opcional para responsive) -->
        <div class="menu-icon">
            <span class="menu-bar"></span>
            <span class="menu-bar"></span>
            <span class="menu-bar"></span>
        </div>
        <?php if (isset($_SESSION['user_id'])) : ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL_PATH ?>/page/logout">Cerrar sesión</a>
                </li>
            </ul>
        <?php endif; ?>
    </div>
</nav>


=======
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Logo y nombre de la marca -->
    <a class="navbar-brand" href="<?= URL_PATH ?>/user/home">Notas y Ecos</a>

    <!-- Botón para colapsar el menú en dispositivos pequeños -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Menú colapsable para pantallas pequeñas y grandes -->
    <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Menú de navegación principal -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?= URL_PATH ?>/user/home">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URL_PATH ?>/user/herramientas">Herramientas Digitales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= URL_PATH ?>/user/contacto">Contacto</a>
            </li>
        </ul>

        <!-- Menú de usuario si está autenticado -->
        <?php if (isset($_SESSION['user_id'])) : ?>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL_PATH ?>/page/logout">Cerrar sesión</a>
                </li>
            </ul>
        <?php endif; ?>
    </div>
</nav>
>>>>>>> 3a3aa64 (Aplicación Web con herramientas digitales: Kahoot, Scratch, Podcast, App Inventor y un Agente Inteligente)
