<?php

class UserController extends Controller
{
    private $connection;

    public function __construct(PDO $connection)
    {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            header('Location: ' . URL_PATH . '/page/login');
            exit();
        }
        $this->connection = $connection;
    }

    public function home()
    {
        $this->render('home', ['title' => 'Inicio'], 'site');
    }

    public function herramientas()
    {
        $this->render('herramientas', ['title' => 'Inicio'], 'site');
    }

    public function contacto()
    {
        $this->render('contacto', ['title' => 'Inicio'], 'site');
    }

}
