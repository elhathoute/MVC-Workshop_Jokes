<?php

class JokeController{
      
    public function getAllJokes(){
        $jokes = Jokes::getAll();

        return $jokes;
    }

    public function getOneJokes(){
        if(isset($_POST['id'])){
            $data=array(
                'id'=>$_POST['id']
            );
        }
        $joke = Jokes::getJoke($data);
        return $joke;
    }

    public function addJoke(){
      if(isset($_POST['save'])){
            $data = array(
                "text" => $_POST['joke']
            );

            $result = Jokes::addJokes($data);

            if($result===true){
                header('location:' . BASE_URL);
            }else{
                echo $result;
            }
      }

    }


    public function UpdateJoke(){
        if(isset($_POST['update'])){
              $data = array(
                "id" => $_POST['id'],
                "text" => $_POST['joke']
              );
  
              $result = Jokes::updateJokes($data);
  
              if($result===true){
                  header('location:' . BASE_URL);
              }else{
                  echo $result;
              }
        }
  
      }
}

   
?>