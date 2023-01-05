<?php
require_once('views/includes/header.php');
require_once('autoload.php');
require_once('./controllers/HomeController.php');

$jokeList = new HomeController();
$pages = ['home', 'add', 'update', 'delete'];

if(isset($_GET['page'])){
    if(in_array($_GET['page'],$pages)){
        $page = $_GET['page'];
        $jokeList->index($page);
    }else{
        include ('views/includes/404.php');
    }
   

}else{
    $jokeList->index('home');
}

?>

<?php 
require_once('views/includes/footer.php');

?>