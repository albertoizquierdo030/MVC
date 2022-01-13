<?php

class comentariosController extends Controller
{
    function index()
    {
        require(ROOT . 'Models/Comment.php');
        $comment = new Comment();
        $d['comments'] = $comment->showAllComments();
        $this->set($d);
        $this->render("index");
    }

    function create()
        {
            require(ROOT . 'Models/User.php');
            require(ROOT . 'Models/Post.php');
            $user = new User();
            $post = new Post();

            $d['users'] = $user->showAllUsers();
            $this->set($d);

            $d['posts'] = $post->showAllPosts();
            $this->set($d);

            if (isset($_POST["user_id"],$_POST["post_id"],$_POST["body"]))
            {
                require(ROOT . 'Models/Comment.php');
                $comment = new Comment();
                if ($comment->create($_POST["user_id"], $_POST["post_id"], $_POST["body"]))
                {
                    header("Location: " . WEBROOT . "comentarios/index");
                }
            }
            $this->render("create");
        }

    function edit($id)
    {
        require(ROOT . 'Models/Comment.php');
        $comment= new Comment();

        $d["comment"] = $comment->showComment($id);

        if (isset($_POST["body"]))
        {
            if ($comment->edit($id, $_POST["body"]))
            {
                header("Location: " . WEBROOT . "comentarios/index");
            }
        }
        $this->set($d);
        $this->render("edit");
    }

    function delete($id)
    {
        require(ROOT . 'Models/Comment.php');

        $comment = new Comment();
        if ($comment->delete($id))
        {
            header("Location: " . WEBROOT . "comentarios/index");
        }
    }

    function datos($id) //nueva función para los datos del comentario
    {
        require(ROOT . 'Models/Comment.php');

        $comment = new Comment();

        $d['comments'] = $comment->showComment($id);
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