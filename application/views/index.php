<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>index</title>
  <link rel="stylesheet" href="<?php echo base_url()?>/resources/css/bootstrap.min.css"> 
</head>
<body>
  <div class="container">
    
  <?php 
  $success= $this->session->flashdata('success');
  if(!empty($success)){ ?>
<div class="alert alert-warning" role="alert">
  
<?php echo $success; ?>
</div>
  <?php }elseif(!empty($error = $this->session->flashdata('error'))) { ?>
<div class="alert alert-warning" role="alert">
  
<?php echo $error; ?>
  </div>
<?php } ?>

  <h1 class="text-center" > Posts  </h1>
<hr>
<?php echo anchor('posts/addPost','Add Post',['class'=>'btn btn-primary float-right',])?>
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php if(count($posts) > 0) {
      $pos = 1;
      }?>
    <?php if(!empty($posts)): foreach($posts as $post):?>
    <tr>

      <td><?php echo $pos ++ ?></td>
      <td><?php echo $post->title; ?></td>
      <td><?php echo substr($post->description, 0,30); ?>...... </td>
      <td> <a class="btn btn-primary" href="<?php echo base_url('posts/post_detail/'.$post->id)?>">Detail</a>
      <a class="btn btn-warning" href="<?php echo base_url('posts/edit/'.$post->id)?> ">Edit</a>
      <a class="btn btn-danger" href="<?php echo base_url('posts/delete/'.$post->id)?>">Delete</a>
    </td>
    </tr>
    <?php endforeach; ?>
    <?php endif ?>
  </tbody>
</table>



</div>
 







<script src="<?php echo base_url()?>/resources/jquery/jquery-3.4.1.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="<?php echo base_url()?>/resources/js/bootstrap.min.js" ></script>
  </body>
</body>
</html>
