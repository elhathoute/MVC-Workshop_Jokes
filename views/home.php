<?php



if(isset($_POST['up'])){
  $up='desc';
  $jokes = new JokeController();
  $result=$jokes->getAllJokes($up);

}else if(isset($_POST['down'])){
 
  $down='asc';
  $jokes = new JokeController();
  $result=$jokes->getAllJokes($down);
}else{
  $down='asc';
  $jokes = new JokeController();
  $result=$jokes->getAllJokes($down);
}

// search


?>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
        <form method="post" action="add" class="mb-2">

<a class="btn btn-success" href="<?php echo BASE_URL?>add"><i class="fa fa-plus"></i></a>
</form>
<form  method="post" action="home">
<button name="up" class="btn btn-primary" ><i class="fa fa-arrow-up"></i></button>
<button name="down" class="btn btn-primary" ><i class="fa fa-arrow-down"></i></button>
 <!-- <input id="search-focus" type="search" name="input-search" class="form-control" /> -->
 

</form>
        </div>
       
 <div class="div-table col-md-8 mx-auto">
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
       
      
        <button  class="btn btn-warning" ><i class="fa fa-edit"></i></button>

        </form>

        <form method="post" action="delete">

         <input type="hidden" name="id" value="<?php echo $jokes['id'];?>">
       
        <button name="delete" class="btn btn-danger" href=" "><i class="fa fa-trash"></i></button>

        </form>
    </td>
  
    </tr>
    <?php }?>

  </tbody>
</table>
        </div>
    </div>
</div>

<script>
  // $(document).ready(function(){
  //   $("#search-focus").on('keyup',function(){

  //     let search=$(this).val();

  //     $.ajax(
  //       {
  //       url:'controllers/JokeController.php' ,
  //       method: 'POST'  ,
  //       data: {search:search}
  //      ,
  //       success:function(response){
  //         $(".div-table").html(response);
  //       }
  //     })
  //   })
  // })
</script>
