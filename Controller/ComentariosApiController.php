<?php
require_once "./Model/ComentarioModel.php";
require_once "./Model/UserModel.php";
require_once "./View/JSONView.php";
require_once "./Helpers/AuthHelper.php";

class ComentariosApiController{

    private $model;
    private $view;
    private $userModel;
    private $authHelper;

    function __construct(){
        $this->model = new ComentarioModel();
        $this->userModel = new UserModel();
        $this->view = new JSONView();
        $this->authHelper = new AuthHelper();
        $this->data = file_get_contents("php://input");
    }

    function getComentariosByArticulo($params = null) {
        $id_articulo = $params[":ID_ARTICULO"];
        $comentarios = $this->model->getComentariosByArticulo($id_articulo);
        if ($comentarios) {
            return $this->view->response($comentarios, 200);
        } else {
            return $this->view->response("No existe un articulo con id $id_articulo", 404);
        }
    }

    function deleteComentario($params = null) {
        $id_comentario = $params[":ID"];
        $comentario = $this->model->getComentarioById($id_comentario);
        if ($comentario) {
            $this->model->deleteComentario($id_comentario);
            return $this->view->response("El comentario $id_comentario fue borrado", 200);
        } else {
            return $this->view->response("El comentario $id_comentario no existe", 404);
        }
    }

    function insertarComentario() {
        try {
            $session = $this->authHelper->checkLoggedIn();
            if ($session && isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $user = $this->userModel->getUser($email);
                $data = json_decode($this->data);
                if ($data->comentario && $data->comentario != '') {
                    $id_ultimo =  $this->model->insertComentario(
                        $data->comentario, $data->puntuacion, $data->id_articulo, $user->id_usuario
                    );
                    $comentario_ultimo = $this->commentModel->getComentarioById($id_ultimo);
                    $this->view->response($comentario_ultimo, 200);
                } else {
                    $this->view->response("sali sin data, $data", 404);
                }
            }
        } catch (Exception $e) {
            $this->view->response(null, 500);
        }
    }
}
