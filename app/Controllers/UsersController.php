<?php 

namespace App\Controllers; 
use App\Models\User; 
use App\Core\View;

class UsersController 
{ 
    /** * Listagem de usuários */ 
    public function index() 
    { 
        $users = User::selectAll(); 

        View::load('users.index', [ 
            'users' => $users,
        ]);
    }
 
 
    /**
     * Exibe o formulário de criação de usuário
     */
    public function create()
    {
        View::load('users.create');
    }
 
 
    /**
     * Processa o formulário de criação de usuário
     */
    public function store()
    {
        // pega os dados do formuário
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
 
        if (User::save($name, $email, $gender, $birthdate))
        {
            header('Location: /');
            exit;
        }
    }
 
 
 
    /**
     * Exibe o formulário de edição de usuário
     */
    public function edit($id)
    {
        $user = User::selectAll($id)[0];
 
        View::load('users.edit',[
            'user' => $user,
        ]);
    }
 
 
    /**
     * Processa o formulário de edição de usuário
     */
    public function update()
    {
        // pega os dados do formuário
        $id = $_POST['id'];
        $name = isset($_POST['name']) ? $_POST['name'] : null;
        $email = isset($_POST['email']) ? $_POST['email'] : null;
        $gender = isset($_POST['gender']) ? $_POST['gender'] : null;
        $birthdate = isset($_POST['birthdate']) ? $_POST['birthdate'] : null;
 
        if (User::update($id, $name, $email, $gender, $birthdate))
        {
            header('Location: /');
            exit;
        }
    }
 
 
    /**
     * Remove um usuário
     */
    public function remove($id)
    {
        if (User::remove($id))
        {
            header('Location: /');
            exit;
        }
    }
}