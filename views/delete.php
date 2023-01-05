<?php

if(isset($_POST['id'])){

  $deleteJoke=new JokeController();
   $deleteJoke->deleteJoke();

}

?>