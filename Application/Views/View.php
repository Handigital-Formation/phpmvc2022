<?php

namespace Application\Views;

class View
{
    protected $data;

    /**
     * Cette fonction a pour but de produire l'affichage de l'application
     * Elle inclut le fichier template.php
     * 
     * Dans les méthodes des contrôleurs (comme Frontend.php):
     * 
     *  On donne le nom de la vue que l'on veut utiliser avec (par exemple):
     *   $this->view->setData('view', 'frontend/accueil'); // ->va chercher le fichier Application/Views/frontend/accueil.php
     * 
     *  Pour passer des variables depuis le contrôleur vers la vue, on écrit dans la méthode du contrôleur: 
     *   $this->view->setData('posts', $des_posts);
     *  alors dans le fichier de la vue, on pourra utiliser la variable $posts pour accéder aux valeurs de $des_posts
     */
    function render($template = 'template') {
        ob_start();
        if($this->data != null) extract($this->data); //extraction du tableau $data. Permet d'avoir accès aux variables définies dans les controllers à travers setData dans les templates
        if(isset($template) and file_exists('Application/Views/'.$template . '.php')) require "Application/Views/".$template.".php";
        else die("La template $template n'existe pas, il faut vérifier l'appel à la fonction \$this->view->render dans le controller");
        $str = ob_get_contents();
        ob_end_clean();
        return $str;
    }

    /**
     * Cette fonction permet de passer des variables depuis le contrôleur vers la vue
     */
    function setData($key, $val) {
        $this->data[$key] = $val;
    }
}