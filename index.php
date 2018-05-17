<?php
// inclui o autoloader do Composer 
require 'vendor/autoload.php'; 
// inclui o arquivo de inicialização 
require 'init.php'; 
// instancia o Slim, habilitando os erros (útil para debug, em desenvolvimento) 
$app = new \Slim\App([ 'settings' => [
        'displayErrorDetails' => true
    ]
]);
  

$app->get('/', function ()
{
    # code...
    $homeController = new \App\Controllers\homeController;
    $homeController->index();
});


// página inicial
// listagem de usuários
$app->get('/user', function ()
{
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->index();
});
 
 
// adição de usuário
// exibe o formulário de cadastro
$app->get('user/add', function ()
{
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->create();
});
 
// processa o formulário de cadastro
$app->post('user/add', function ()
{
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->store();
});
 
 
// edição de usuário
// exibe o formulário de edição
$app->get('user/edit/{id}', function ($request)
{
    // pega o ID da URL
    $id = $request->getAttribute('id');
 
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->edit($id);
});
 
// processa o formulário de edição
$app->post('user/edit', function ()
{
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->update();
});
 
// remove um usuário
$app->get('user/remove/{id}', function ($request)
{
    // pega o ID da URL
    $id = $request->getAttribute('id');
 
    $UsersController = new \App\Controllers\UsersController;
    $UsersController->remove($id);
});
 
$app->run();