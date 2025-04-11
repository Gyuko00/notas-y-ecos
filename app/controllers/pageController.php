<?php

class PageController extends Controller
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function login()
    {
        $this->render('login', ['title' => 'Login'], 'site');
    }

    public function autenticar()
    {
        $username = $_POST['nombreUsuario'];
        $password = $_POST['contrasena'];

        $usuarioModel = new Usuario($this->connection);
        $user = $usuarioModel->buscarPorCredenciales($username, $password);

        if ($user) {
            session_start();
            $_SESSION['user_id'] = $user['id'];
            header('Location: ' . URL_PATH . '/user/home');
            exit();
        } else {
            $this->render('login', ['error' => 'Credenciales incorrectas', 'title' => 'Login'], 'site');
        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: ' . URL_PATH . '/page/login');
        exit();
    }
}
