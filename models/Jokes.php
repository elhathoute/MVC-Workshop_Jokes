<?php 

class Jokes{

     static public function getAll(){
        $stm = DB::connex()->prepare("select * from jokes");
        $stm->execute();
        return $stm->fetchAll();
    

    }
    static public function getJoke($data){
        try{
            $stm = DB::connex()->prepare("select * from jokes where id=?");
            $stm->execute([$data['id']]);
            $joke=$stm->fetch(PDO::FETCH_OBJ);
            return $joke;
        }catch(PDOException $e){

            echo 'error is : '.$e->getMessage();
        }
       
    
    }

   static public function addJokes($data){
    $stm = DB::connex()->prepare("insert into jokes(text) values(?)");
    $stm->execute([$data['text']]);
       if($stm->execute()){

            return true;
       }else{
            return false;
       }

       

   }


   static public function updateJokes($data){
    $stm = DB::connex()->prepare("UPDATE jokes SET text=? WHERE id=?");

        // die(print_r($data));
    $stm->execute([$data['text'],$data['id']]);
       if($stm->execute()){

            return true;
       }else{
            return false;
       }

       

   }
}

?>