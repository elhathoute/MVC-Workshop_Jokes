
<?php
if(isset($_POST['id'])){
    $updatejoke = new JokeController();
    $jokeUpdate = $updatejoke->getOneJokes();
}

if(isset($_POST['update'])){
    $updatejoke = new JokeController();
    $updatejoke->UpdateJoke();
}



?>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
        <form method="post" action="add">

<a class="btn btn-info mb-2" href="<?php echo BASE_URL?>"><i class="fa fa-backward"></i></a>

</form>
        </div>
       
 <div class="col-md-8 mx-auto">
        
<form method="post" >
<div class="mb-3">
    <label for="id" class="form-label">id</label>
    <input type="number" class="form-control" id="id" name="id" readonly autocomplete="off"
    value="<?php echo $jokeUpdate->id; ?>"
    
    >
  
  </div>

  <div class="mb-3">
    <label for="joke" class="form-label">joke</label>
    <input type="text" class="form-control" id="joke" name="joke" autocomplete="off"
    value="<?php echo $jokeUpdate->text; ?>"
    
    >
  
  </div>
 
  <button type="submit" class="btn btn-success" name="update">update</button>
</form>
        </div>
    </div>
</div>

