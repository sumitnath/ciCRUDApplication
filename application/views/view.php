<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail</title>
  <link rel="stylesheet" href="<?php echo base_url()?>/resources/css/bootstrap.min.css"> 
</head>
<body>
  <div class="container">

<h1 class="text-center">Posts Details</h1>
<hr>

<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade show active" id="home">
    <h3 class="text-center"> <?php echo !empty($posts->title) ? $posts->title : '' ?></h3>
  </div>
  <div class="tab-pane fade show active" id="profile">
    <p>"<?php echo !empty($posts->description) ? $posts->description : '' ?></p>
  </div>
 
</div>
</div>

<script src="<?php echo base_url()?>/resources/jquery/jquery-3.4.1.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="<?php echo base_url()?>/resources/js/bootstrap.min.js" ></script>
  </body>

</html>
