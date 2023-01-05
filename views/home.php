<?php

$jokes = new JokeController();
$result=$jokes->getAllJokes();
// print_r($result)
?>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
        <form method="post" action="add">

<a class="btn btn-success" href="<?php echo BASE_URL?>add"><i class="fa fa-plus"></i></a>

</form>
        </div>
       
 <div class="col-md-8 mx-auto">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Jokes</th>
      <th scope="col">Actions</th>
    
    </tr>
  </thead>
  <tbody>
    <?php foreach($result as $jokes) {?>
    <tr>
      <th scope="row"><?php echo $jokes['id'];?></th>
      <td><?php echo $jokes['text'];?></td>
      <td class="d-flex flex-row">
        
        <form class="me-2" method="post" action="update">
            <input type="hidden" name="id" value="<?php echo $jokes['id'];?>">
       
      
        <button  class="btn btn-warning" href=" "><i class="fa fa-edit"></i></button>

        </form>

        <form method="post" action="delete">

         <input type="hidden" name="id" value="<?php echo $jokes['id'];?>">
       
        <button class="btn btn-danger" href=" "><i class="fa fa-trash"></i></button>

        </form>
    </td>
  
    </tr>
    <?php }?>

  </tbody>
</table>
        </div>
    </div>
</div>
