<?php
 
namespace App\Core;
 
/**
 * Classe para gerar uma view da aplicação.
 * É responsável por carregar o template geral e adicionar a view que deve ser exibida
 */
class View
{
    /**
     * Exibe uma view.
     * Função inspirada na usada pelo Laravel 4. Veja: <a class="vglnk" href="http://laravel.com/docs/4.2/responses#views" rel="nofollow"><span>http</span><span>://</span><span>laravel</span><span>.</span><span>com</span><span>/</span><span>docs</span><span>/</span><span>4</span><span>.</span><span>2</span><span>/</span><span>responses</span><span>#</span><span>views</span></a>
     *
     * @link <a class="vglnk" href="http://laravel.com/docs/4.2/responses#views" rel="nofollow"><span>http</span><span>://</span><span>laravel</span><span>.</span><span>com</span><span>/</span><span>docs</span><span>/</span><span>4</span><span>.</span><span>2</span><span>/</span><span>responses</span><span>#</span><span>views</span></a>
     * @param  string $viewName   Nome da view, que é o nome do arquivo em lib/views, sem o ".php"
     * @param  array  $customVars (opcional) Array com variáveis que serão usadas na view
     */
    public static function load($viewName, array $customVars = array())
    {
        // cria as variáveis do array $customVars
        extract($customVars);
         
        // inclui o template, que vai processar a view na variável $viewName
        require_once viewsPath() . 'template.php';
    }
}