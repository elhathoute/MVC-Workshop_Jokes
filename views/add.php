
<?php
if(isset($_POST['save'])){
    $newjokes = new JokeController();
    $newjokes->addJoke();
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
    <label for="joke" class="form-label">joke</label>
    <input type="text" class="form-control" id="joke" name="joke" autocomplete="off">
  
  </div>
 
  <button type="submit" class="btn btn-primary" name="save">save</button>
</form>
        </div>
    </div>
</div>

