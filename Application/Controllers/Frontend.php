<?php

namespace Application\Controllers;

Class Frontend {

    public $view;

    function __construct() {
        $this->view = new \Application\Views\View();
    }

    /**
     * Affiche la page d'accueil
     */
    function index()
    {
        //Exemple de récupération d'une page en base de données
        $page_repository = new \Application\Models\PageRepository(); //on instancie un repository
        $donnees_page_accueil = $page_repository->read('accueil'); //on récupère les données depuis la base de données

        $page_accueil = new \Application\Models\Page( $donnees_page_accueil ); //on instancie un objet page (Un modèle) avec les données récupérées par le repository

        // //On passe notre objet à la vue. Dans la fichier de la vue, on pourra utiliser la variable $page
        $this->view->setData('page', $page_accueil);


        $article_repository = new \Application\Models\ArticleRepository(); //on instancie un repository
        $donnees_articles = $article_repository->all(); //on récupère les données depuis la base de données
        // print_r($donnees_articles);die;

        $articles = [];
        // boucler sur mon tableau donnees_articles
        // pour chacun creer un objet article et l'ajouter à mon tableau d'articles
        foreach($donnees_articles as $donnees_article){
            $articles[] = new \Application\Models\Article( $donnees_article );
        }

         $this->view->setData('articles', $articles);
        // //print_r($articles);die;

        // //On donne le nom de la vue que l'on veut appeler
        $this->view->setData('view', 'frontend/accueil');

        //on appelle la template, qui va utiliser la view que l'on a choisie
        //La fonction render utilise template.php par défaut, mais on peut lui spécifier une autre template en paramètre
        echo $this->view->render();
    }

    /**
     * Affiche une page
     * @param String $name: l'url de la page (colonne)
     */
    function page($name = "accueil")
    {
      if(isset($_GET['name']) and $_GET['name'] != "") $name = $_GET['name'];

        $page = new \Application\Models\Page([]);

        $this->view->setData('page', $page);
        $this->view->setData('view', 'frontend/'.$name);

        //on appelle la template, qui va utiliser la view que l'on a choisie
        echo $this->view->render();
    }

    /**
     * Affiche la page des articles
     * @param String $category : Permet de trier les articles par catégorie
     */
    function articles($category = null) {

      if(isset($_GET['category'])) $category = $_GET['category']; //si param category, on l'utilise

      $article_repository = new \Application\Models\ArticleRepository(); //on instancie un repository
      $donnees_articles = $article_repository->all($category); //on récupère les données depuis la base de données

      //On crée les modèles
      $articles_array = [];
      foreach($donnees_articles as $donnees_article){
          $articles_array[] = new \Application\Models\Article( $donnees_article );
      }

      //on passe les articles à la vue $articles_array deviendra $articles dans la vue
      $this->view->setData('articles', $articles_array);

      $this->view->setData('title', $category);//on crée une variable $title en view
      
      //On donne le nom de la vue que l'on veut appeler
      $this->view->setData('view', 'articles/list');

      //on appelle la template, qui va utiliser la view que l'on a choisie
      echo $this->view->render();
    }

    /**
     * Affiche la page d'un article
     * @param String $name : Le nom de l'article à afficher
     */
    function article($name = null) {

        /***********************************************/
        //À compléter
        //On doit récupérer l'article depuis la base de données puis l'initialiser
        //puis le passer à une view
        /***********************************************/


        //on appelle la template, qui va utiliser la view que l'on a choisie
        echo $this->view->render();
    }

    /**
     * Affiche et traite le formulaire de contact
     */
    function contact() {

        /***********************************************/
        //À compléter
        //On doit appeler le formulaire s'il n'y a pas de $_POST
        //S'il y a du $_POST, on doit le vérifier, l'enregistrer en base de données puis afficher un message
        /***********************************************/

        //on appelle la template, qui va utiliser la view que l'on a choisie
        echo $this->view->render();
    }

    /**
     * Traite le formulaire de newsletter
     */
    function newsletter() {

        /***********************************************/
        /***********************************************/

        //on appelle la template, qui va utiliser la view que l'on a choisie
        echo $this->view->render();
    }
}
