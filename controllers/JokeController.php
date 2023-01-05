<?php

class JokeController{
      
    public function getAllJokes($type){
       
        $jokes = Jokes::getAll($type);

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
      public function deleteJoke(){
        if(isset($_POST['id'])){
           $data['id']=$_POST['id'];
           $result=Jokes::deleteJokes($data['id']);
           if($result===true){
            header('location:' . BASE_URL);
        }else{
            echo $result;
        }
        }
      }
}

   
?>