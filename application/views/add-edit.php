<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add-edit</title>
  <link rel="stylesheet" href="<?php echo base_url()?>/resources/css/bootstrap.min.css"> 
</head>
<body>
  <div class="container">
  <?php 
  $success= $this->session->flashdata('success');
  if(!empty($sucess)){ ?>
<div class="alert alert-warning" role="alert">
  <?php echo $sucess; ?>
</div>
  <?php }elseif(!empty($error = $this->session->flashdata('error'))) { ?>
<div class="alert alert-warning" role="alert">
  
<?php echo $error; ?>
  </div>
<?php } ?>
<h1 class="text-center">Post</h1>
<hr>
<form action="" method="post">
  <fieldset>
 
    <div class="form-group">
      <label for="exampleInputEmail1">Title </label>
      <input type="text" class="form-control" name="title" value="<?php echo !empty($posts->title) ? $posts->title : '' ?>" placeholder="Enter Title">
      <?php echo form_error('title'); ?>
    </div>

    <div class="form-group">
      <label for="exampleTextarea">Description</label>
      <textarea class="form-control" rows="3" name="description" ><?php echo !empty($posts->description) ? $posts->description : '' ?> </textarea>
      <?php echo form_error('description','<div class="form-group has-danger">','</div>
'); ?>
    </div>
    <input type="submit"name="postSubmit" class="btn btn-primary"></button>
    </fieldset>
</form>


  </div>

<script src="<?php echo base_url()?>/resources/jquery/jquery-3.4.1.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="<?php echo base_url()?>/resources/js/bootstrap.min.js" ></script>
  </body>

</html>
