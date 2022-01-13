<?php

class usersController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/User.php');

        $user = new User();

        $d['users'] = $user->showAllUsers();
        $this->set($d);
        $this->render("index");
    }

    function create()
    {
        if (isset($_POST["name"], $_POST["email"], $_POST["password"]))
        {
            require(ROOT . 'Models/User.php');

            $user= new User();

            if ($user->create($_POST["name"], $_POST["email"], $_POST["password"]))
            {
                header("Location: " . WEBROOT . "users/index");
            }
        }

        $this->render("create");
    }

    function edit($id)
    {
        require(ROOT . 'Models/User.php');
        $user= new User();

        $d["user"] = $user->showUser($id);

        if (isset($_POST["name"],$_POST["email"]))
        {
            if ($user->edit($id, $_POST["name"], $_POST["email"]))
            {
                header("Location: " . WEBROOT . "users/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/User.php');

        $user = new User();
        if ($user->delete($id))
        {
            header("Location: " . WEBROOT . "users/index");
        }
    }

    function datos($id) //nueva función para los datos del usuario
    {
        require(ROOT . 'Models/User.php');

        $user = new User();

        $d['users'] = $user->showUser($id);
        $this->set($d);
        $this->render("datos");
    }

    function error($m){
        $d["error"] = $m;
        $this->set($d);
        $this->render("error");
    }
}
?>